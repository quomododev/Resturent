<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SaftyFeature;
use App\Models\TranslateSaftyFeature;
use App\Models\Language;


class SaftyFeatureController extends Controller
{
    public function index()
    {
        $saftyFeatures = SaftyFeature::with('translate_safty_feature')->paginate(8);
        return view('Admin.SaftyFeature',compact('saftyFeatures'));
    
    }
    public function create()
    {
        return view('Admin.CreateSaftyFeature');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $saftyFeature = new SaftyFeature();
        $saftyFeature->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateSaftyFeature();
          $translate->saftyfeature_id = $saftyFeature->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->save();
        }

        $message = "Insert Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('safty-feature.edit',$saftyFeature->id)->with($notification);
    }
   
    public function edit($id)
    {
        $saftyFeature = SaftyFeature::with('translate_safty_feature')->find($id);
        return view('Admin.EditSaftyFeature',compact('saftyFeature'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        $translate = TranslateSaftyFeature::where('saftyfeature_id',$id)->where('lang_code','en')->first();  
        $translate->saftyfeature_id = $translate->saftyfeature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
        try{
            $exteriorFeature = SaftyFeature::find($id);
            $exteriorFeature->delete();
            TranslateSaftyFeature::where('saftyfeature_id',$id)->delete();

            $message = "Delete Successfully!!";
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);

       }catch(Exception $e)
       {
            $message = $e->getMessage();
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
       }
    }

    public function editLanguage($featureId,$langCode)
    {
        $saftyFeature =  SaftyFeature::with('translate_safty_feature')->find($featureId);
        $translate_safty_feature =  TranslateSaftyFeature::where('saftyfeature_id',$featureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditSaftyFeature',compact('translate_safty_feature','saftyFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateSaftyFeature::find($id);
        $translate->saftyfeature_id = $translate->saftyfeature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
