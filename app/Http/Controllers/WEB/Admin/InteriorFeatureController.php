<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InteriorFeature;
use App\Models\TranslateInteriorFeature;
use App\Models\Language;

class InteriorFeatureController extends Controller
{
    public function index()
    {
        $interiotFeatures = InteriorFeature::with('translate_interiorfeature')->orderBy('id','DESC')->paginate(8);
        return view('Admin.InteriorFeature',compact('interiotFeatures'));
    }
    
    public function create()
    {
       return view('Admin.CreateInteriorFeature');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $interiorFeature = new InteriorFeature();
        $interiorFeature->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateInteriorFeature();
          $translate->interiorfeature_id = $interiorFeature->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->save();
        }

        $message = "Insert Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('interior-feature.edit',$interiorFeature->id)->with($notification);
    }
    public function edit($id)
    {
        $interiorFeature = InteriorFeature::with('translate_interiorfeature')->find($id);
        return view('Admin.EditInteriorFeature',compact('interiorFeature'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string'
        ]);
        $translate = TranslateInteriorFeature::where('interiorfeature_id',$id)->where('lang_code','en')->first();  
        $translate->interiorfeature_id = $translate->interiorfeature_id;
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
            $exteriorFeature = InteriorFeature::find($id);
            $exteriorFeature->delete();
            TranslateInteriorFeature::where('interiorfeature_id',$id)->delete();

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
        $interiorFeature =  InteriorFeature::with('translate_interiorfeature')->find($featureId);
        $translate_Interior_feature =  TranslateInteriorFeature::where('interiorfeature_id',$featureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditInteriorFeature',compact('translate_Interior_feature','interiorFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateInteriorFeature::find($id);
        $translate->interiorfeature_id = $translate->interiorfeature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
