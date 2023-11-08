<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LotFeatur;
use App\Models\TranslateLotFeatur;
use App\Models\Language;

class LotFeatureController extends Controller
{
    public function index()
    {
        $lotFeatures = LotFeatur::with('lotfeature_translate')->paginate(8);
        return view('Admin.LotFeature', compact('lotFeatures'));
    }
    public function create()
    {
        return view('Admin.CreateLotFeature');
    }
    public function store(Request $request)
    {
       $request->validate([
        'name' => 'required|string',
       ]);

       $lotFeature = new LotFeatur();
       $lotFeature->save();

       $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateLotFeatur();
          $translate->lot_feature_id = $lotFeature->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->save();
        }
        $message = "Insert Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('lot-feature.edit',$lotFeature->id)->with($notification);

    }
    public function edit($id)
    {
        $lotFeature = LotFeatur::with('lotfeature_translate')->find($id);
        return view('Admin.EditLotFeature',compact('lotFeature'));
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $translate = TranslateLotFeatur::where('lot_feature_id',$id)->where('lang_code','en')->first();
        $translate->lot_feature_id = $translate->lot_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        $lotFeature = LotFeatur::find($id);
        $lotFeature->delete();
        TranslateLotFeatur::where('lot_feature_id',$id)->delete();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('lot-feature.index')->with($notification);
    }

    public function editLanguage($lotFeatureId,$langCode)
    {
        $lotFeature =  LotFeatur::with('lotfeature_translate')->find($lotFeatureId);
        $translate_lot_feature =  TranslateLotFeatur::where('lot_feature_id',$lotFeatureId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditLotFeature',compact('translate_lot_feature','lotFeature','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateLotFeatur::find($id);
        $translate->lot_feature_id = $translate->lot_feature_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }
}
