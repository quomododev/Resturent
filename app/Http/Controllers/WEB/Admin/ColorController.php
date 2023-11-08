<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Language;
use App\Models\TranslateColor;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::with('color_translate')->paginate(8);
        return view('Admin.Colors',compact('colors'));
    }
    public function create()
    {
        return view('Admin.CreateColor');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string|unique:colors,slug',
        ]);
        $color = new Color();
        $color->slug = $request->slug;
        $color->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateColor();
          $translate->color_id = $color->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->save();
        }
       
        $message = "Insert Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->route('colors.edit',$color->id)->with($notification);
    }
    public function edit($id)
    {
        $color = Color::with('color_translate')->find($id);
        return view('Admin.EditColor',compact('color'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:color_translate,name,'.$id,
            'slug' => 'required|string|unique:colors,slug,'.$id,
        ]);

        $color = Color::find($id);
        $color->slug = $request->slug;
        $color->save();

        $translate = TranslateColor::where('color_id',$id)->where('lang_code','en')->first();
        $translate->color_id = $translate->color_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        $color = Color::find($id);
        $color->delete();
        TranslateColor::where('color_id',$id)->delete();

        $message = "Delete Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function editLanguage($colorId,$langCode)
    {
        $color =  Color::with('color_translate')->find($colorId);
        $translate_color =  TranslateColor::where('color_id',$colorId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditColor',compact('translate_color','color','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $translate = TranslateColor::find($id);
        $translate->color_id = $translate->color_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
