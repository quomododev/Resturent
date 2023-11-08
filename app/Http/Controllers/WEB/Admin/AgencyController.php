<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\country;
use App\Models\Language;
use App\Models\TranslateAgency;
use Image;
use Str;
use File;

class AgencyController extends Controller
{

    public function index()
    {
        $agencies = Agency::with('agency_translate','country.translate_country','city.translate_city')->orderBy('id','DESC')->paginate(8);
        return view('Admin.Agency',compact('agencies'));
    }
    public function create()
    {
        $countries = country::with('translate_country')->where('status','active')->get();

        return view('Admin.CreateAgency',compact('countries'));
    }

    public function store(Request $request)
    {
       // return $request->agency_description;
        $request->validate([
            'name' => 'required|string',
            'email_one' => 'required|string|email',
            'email_two' => 'required|string|email',
            'phone_one' => 'required|string',
            'phone_two' => 'required|string',
            'address_one' => 'required|string',
            'address_two' => 'required|string',
            'website_url' => 'required|string',
            'facebook_url' => 'required|string',
            'instagram_url' => 'required|string',
            'status' => 'required|string',
            'agency_description' => 'required|string',
            'zip_code' => 'required|string',
        ]);
        $agency = new Agency();
        if($request->logo){
            $extention = $request->logo->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->logo)
                ->save(public_path().'/'.$image_name);
        }else{
            $image_name = null;
        }
        $agency->email_one = $request->email_one;
        $agency->email_two = $request->email_two;
        $agency->phone_one = $request->phone_one;
        $agency->phone_two = $request->phone_two;
        $agency->website_url = $request->website_url;
        $agency->facebook_url = $request->facebook_url;
        $agency->instagram_url = $request->instagram_url;
        $agency->country_id = $request->country_id;
        $agency->state_id = $request->state_id;
        $agency->city_id = $request->city_id;
        $agency->zip_code = $request->zip_code;
        $agency->status = $request->status;
        $agency->logo = $image_name;
        $agency->password = $request->password;
        $agency->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateAgency();
          $translate->agency_id = $agency->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->address_one = $request->address_one;
          $translate->address_two = $request->address_two;
          $translate->description = $request->agency_description;
          $translate->save();
        }
        $message = "Insert Successfully !!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->route('agency.edit',$agency->id)->with($notification);
        
    }

    public function edit($id)
    {
        $countries = country::with('translate_country')->where('status','active')->get();
        $agency = Agency::with('agency_translate')->find($id);
        return view('Admin.EditAgency',compact('agency','countries'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email_one' => 'required|string|email',
            'email_two' => 'required|string|email',
            'phone_one' => 'required|string',
            'phone_two' => 'required|string',
            'address_one' => 'required|string',
            'address_two' => 'required|string',
            'website_url' => 'required|string',
            'facebook_url' => 'required|string',
            'instagram_url' => 'required|string',
            'status' => 'required|string',
            'agency_description' => 'required|string',
            'zip_code' => 'required|string',
        ]);
        $agency = Agency::find($id);
        if($request->logo){
            $extention = $request->logo->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->logo)
                ->save(public_path().'/'.$image_name);
        }else{
            $image_name = $agency->logo;
        }
        $agency->email_one = $request->email_one;
        $agency->email_two = $request->email_two;
        $agency->phone_one = $request->phone_one;
        $agency->phone_two = $request->phone_two;
        $agency->website_url = $request->website_url;
        $agency->facebook_url = $request->facebook_url;
        $agency->instagram_url = $request->instagram_url;
        $agency->country_id = $request->country_id;
        $agency->state_id = $request->state_id;
        $agency->city_id = $request->city_id;
        $agency->zip_code = $request->zip_code;
        $agency->status = $request->status;
        $agency->logo = $image_name;
        $agency->save();

        $translate = TranslateAgency::where('agency_id',$id)->where('lang_code','en')->first();
        $translate->agency_id = $agency->id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->address_one = $request->address_one;
        $translate->address_two = $request->address_two;
        $translate->description = $request->agency_description;
        $translate->save();
        
        $message = "Insert Successfully !!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->route('agency.edit',$agency->id)->with($notification);
    }

    public function delete($id)
    {
        $agency =  Agency::find($id);
        $agency->delete();
        TranslateAgency::where('agency_id',$id)->delete();

        $message = "Delete   Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function editLanguage($agencyId,$langCode)
    {
        $agency =  Agency::with('agency_translate')->find($agencyId);
        $translate_agency =  TranslateAgency::where('agency_id',$agencyId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditAgency',compact('translate_agency','agency','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
       // return $request->all();
        $request->validate([
            'name' => 'required|string',
            'agency_description' => 'required|string',
            'address_one' => 'required|string',
            'address_two' => 'required|string',

        ]);
        $translate = TranslateAgency::find($id);
        $translate->agency_id = $translate->agency_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->address_one = $request->address_one;
        $translate->address_two = $request->address_two;
        $translate->description = $request->agency_description;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
