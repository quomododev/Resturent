<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\childcategory;
use App\Models\subcategory;
use App\Models\TranslateChildCategory;
use App\Models\Language;
use Validator;

class ChildCategoryController extends Controller
{

    public function index()
    {
        $childcategories = childcategory::with('translate_child_category','subcategory.translate_subcategory')->paginate(8);
        return view('Admin.ChildCategory',compact('childcategories'));
    }
    public function create()
    {
        $subcategories = subcategory::with('translate_subcategory')->where('status','active')->get();
        return view('Admin.CreateChildCategory',compact('subcategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|string|unique:child_categories,slug',
            'name' => 'required|string|unique:child_category_translate,name',
            'subcategory_id' => 'required|integer',
            'status' => 'required|string'
        ]);

        $childcategory = new childcategory();
        $childcategory->subcategory_id = $request->subcategory_id;
        $childcategory->slug = $request->slug;
        $childcategory->status = $request->status;
        $childcategory->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateChildCategory();
          $translate->child_category_id = $childcategory->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->save();
        }

        $message = "Insert Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('child-categories.edit',$childcategory->id)->with($notification);
    }
    public function edit($id)
    {
        $childcategory = childcategory::with('translate_child_category')->find($id);
        $subcategories = subcategory::with('translate_subcategory')->where('status','active')->get();
        return view('Admin.EditChildCategory',compact('childcategory','subcategories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'subcategory_id' => 'required',
            'name' => 'required|string',
            'slug' => 'required|string|unique:child_categories,slug,'.$id,
            'status' => 'required|string'
        ]);

        $childcategory = childcategory::find($id);
        $childcategory->subcategory_id = $request->subcategory_id;
        $childcategory->slug = $request->slug;
        $childcategory->status = $request->status;
        $childcategory->save();

        $translate = TranslateChildCategory::where('child_category_id',$id)->where('lang_code','en')->first();
        $translate->child_category_id = $translate->child_category_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        $childcategory = childcategory::find($id);
        $childcategory->delete();
        TranslateChildCategory::where('child_category_id', $id)->delete();

        $message = "Delete Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
 

    public function editLanguage($childCategoryId,$langCode)
    {
        $childcategory =  childcategory::with('translate_child_category')->find($childCategoryId);
        $translate_child_category =  TranslateChildCategory::where('child_category_id',$childCategoryId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditChildCategory',compact('childcategory','translate_child_category','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);
        $translate = TranslateChildCategory::find($id);
        $translate->child_category_id = $translate->child_category_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }

    public function Status($id)
    {
        $update_status = 'active';
        $childcategory = childcategory::find($id);
        if($childcategory->status == 'active')
        {
            $update_status = 'inactive';
        }else{
            $update_status = 'active';
        }
        $childcategory->update([
            'status' => $update_status
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Status Updated',
        ]);
    }
}
