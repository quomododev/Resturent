<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurFeature;
use App\Models\TranslateOurFeature;
use App\Models\Language;

class OurFeatureController extends Controller
{
    public function index()
    {
        $ourFeatures = OurFeature::with('translate_ourfeature')->paginate(8);
        return view('Admin.OurFeature',compact('ourFeatures'));
    }
    public function create()
    {
        return view('Admin.CreateOurFeature');
    }
    public function store(Request $request)
    {
        $ourFeature = new OurFeature();
        $ourFeature->icon = $request->icon;
        $ourFeature->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateOurFeature();
          $translate->our_feature_id = $ourFeature->id;
          $translate->lang_code = $language->lang_code;
          $translate->title = $request->title;
          $translate->description = $request->description;
          $translate->save();
        }
        $message = "Insert Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('our-feature.edit',$ourFeature->id)->with($notification);
    }
    public function edit($id)
    {
        $ourFeature = OurFeature::with('translate_ourfeature')->find($id);
        return view('Admin.EditOurFeature',compact('ourFeature'));
    }
    public function update(Request $request, $id)
    {
        

        $ourFeature = OurFeature::find($id);
        $ourFeature->icon = $request->icon;
        $ourFeature->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get(); 
        foreach($languages as $language)
        {
          $translate = TranslateOurFeature::where('our_feature_id',$id)->where('lang_code','en')->first();
          $translate->our_feature_id = $ourFeature->id;
          $translate->lang_code = $translate->lang_code;
          $translate->title = $request->title;
          $translate->description = $request->description;
          $translate->save();
        }
        $message = "Update Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        try{
            $ourFeature = OurFeature::find($id);
            $ourFeature->delete();
            TranslateOurFeature::where('our_feature_id',$id)->delete();
            
            $message = "Update Successfully!";
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);

        }catch(Exception $e){
            $message = $e->getMessage();
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
        
    }
    public function editLanguage($ourFeatureId,$langCode)
    {
        $ourFeature =  OurFeature::with('translate_ourfeature')->find($ourFeatureId);
        $translate_our_feature =  TranslateOurFeature::where('our_feature_id',$ourFeatureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditOurFeature',compact('translate_our_feature','ourFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
       
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
           ]);
        $translate = TranslateOurFeature::find($id);
        $translate->our_feature_id = $translate->our_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->description = $request->description;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }
}
