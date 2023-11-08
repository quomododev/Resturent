<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndoreFeature;
use App\Models\TranslateIndoreFeature;
use App\Models\Language;

class IndoreFeatureController extends Controller
{
    public function index()
    {
        $indoreFeatures = IndoreFeature::with('indorefeature_translate')->paginate(8);
        return view('Admin.IndoreFeature',compact('indoreFeatures'));
    }
    public function create()
    {
        return view('Admin.CreateIndoreFeature');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
           ]);
    
           $indoreFeature = new IndoreFeature();
           $indoreFeature->save();
    
           $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
            foreach($languages as $language)
            {
              $translate = new TranslateIndoreFeature();
              $translate->indore_feature_id = $indoreFeature->id;
              $translate->lang_code = $language->lang_code;
              $translate->name = $request->name;
              $translate->save();
            }

            $message = "Insert Successfully!";
            $notification = array('message' => $message,'alert-type' => 'success');
            return redirect()->route('lot-feature.edit',$indoreFeature->id)->with($notification);
    }

    public function edit($id)
    {
        $indoreFeature = IndoreFeature::with('indorefeature_translate')->find($id);
        return view('Admin.EditIndoreFeature',compact('indoreFeature'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $translate = TranslateIndoreFeature::where('indore_feature_id',$id)->where('lang_code','en')->first();
        $translate->indore_feature_id = $translate->indore_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        $indoreFeature = IndoreFeature::find($id);
        $indoreFeature->delete();
        TranslateIndoreFeature::where('indore_feature_id',$id)->delete();

        $message = "Delete Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function editLanguage($indoreFeatureId,$langCode)
    {
        $indoreFeature =  IndoreFeature::with('indorefeature_translate')->find($indoreFeatureId);
        $translate_indore_feature =  TranslateIndoreFeature::where('indore_feature_id',$indoreFeatureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditIndoreFeature',compact('translate_indore_feature','indoreFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateIndoreFeature::find($id);
        $translate->indore_feature_id = $translate->indore_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }
}
