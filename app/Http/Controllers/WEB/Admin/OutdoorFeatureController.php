<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OutdoorFeature;
use App\Models\TranslateOutdoorFeature;
use App\Models\Language;

class OutdoorFeatureController extends Controller
{
    public function index()
    {
        $outdoorFeatures = OutdoorFeature::with('outdoorfeature_translate')->paginate(8);
        return view('Admin.OutdoorFeature',compact('outdoorFeatures'));
    }
    public function create()
    {
        return view('Admin.CreateOutdoorFeature');
    }
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string',
        ]);

        $outdoorFeature = new OutdoorFeature();
        $outdoorFeature->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
            $translate = new TranslateOutdoorFeature();
            $translate->outdoor_feature_id = $outdoorFeature->id;
            $translate->lang_code = $language->lang_code;
            $translate->name = $request->name;
            $translate->save();
        }
        $message = "Insert Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('outdoor-feature.edit',$outdoorFeature->id)->with($notification);
    }
    public function edit($id)
    {
        $outdoorFeature = OutdoorFeature::with('outdoorfeature_translate')->find($id);
        return view('Admin.EditOutdoorFeature',compact('outdoorFeature'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $translate = TranslateOutdoorFeature::where('outdoor_feature_id',$id)->where('lang_code','en')->first();
        $translate->outdoor_feature_id = $translate->outdoor_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        $outdoorFeature = OutdoorFeature::find($id);
        $outdoorFeature->delete();
        TranslateOutdoorFeature::where('outdoor_feature_id',$id)->delete();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('lot-feature.index')->with($notification);
    }

    public function editLanguage($outdoorFeatureId,$langCode)
    {
        $outdoorFeature =  OutdoorFeature::with('outdoorfeature_translate')->find($outdoorFeatureId);
        $translate_outdoor_feature =  TranslateOutdoorFeature::where('outdoor_feature_id',$outdoorFeatureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditOutdoorFeature',compact('translate_outdoor_feature','outdoorFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateOutdoorFeature::find($id);
        $translate->outdoor_feature_id = $translate->outdoor_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }
}
