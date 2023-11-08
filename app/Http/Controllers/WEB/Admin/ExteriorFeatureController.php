<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExteriorFeature;
use App\Models\TranslateExteriorFeature;
use App\Models\Language;

class ExteriorFeatureController extends Controller
{

    public function index()
    {
        $exteriorFeatures = ExteriorFeature::with('translate_exterior_feature')->paginate(8);
        return view('Admin.ExteriorFeature',compact('exteriorFeatures'));
    }
    public function create()
    {
        return view('Admin.CreateExteriorFeature');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $exteriorFeature = new ExteriorFeature();
        $exteriorFeature->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateExteriorFeature();
          $translate->exteriorfeature_id = $exteriorFeature->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->save();
        }

        $message = "Insert Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('exterior-feature.edit',$exteriorFeature->id)->with($notification);
    }
    public function edit($id)
    {
        $exteriorFeature = ExteriorFeature::with('translate_exterior_feature')->find($id);
        return view('Admin.EditExteriorFeature',compact('exteriorFeature'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string'
        ]);
        $translate = TranslateExteriorFeature::where('exteriorfeature_id',$id)->where('lang_code','en')->first();  
        $translate->exteriorfeature_id = $translate->exteriorfeature_id;
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
            $exteriorFeature = ExteriorFeature::find($id);
            $exteriorFeature->delete();
            TranslateExteriorFeature::where('exteriorfeature_id',$id)->delete();

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
      
        $exteriorFeature =  ExteriorFeature::with('translate_exterior_feature')->find($featureId);
        $translate_Exterior_feature =  TranslateExteriorFeature::where('exteriorfeature_id',$featureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditExteriorFeature',compact('translate_Exterior_feature','exteriorFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateExteriorFeature::find($id);
        $translate->exteriorfeature_id = $translate->exteriorfeature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
