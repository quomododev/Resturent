<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subcategory;
use App\Models\category;
use App\Models\TranslateSubcategory;
use App\Models\Language;
use Validator;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = subcategory::with('translate_subcategory','category.translate_category')->paginate(8);
        return view('Admin.SubCategory',compact('subCategories'));
    }
    public function create()
    {
       $categories = category::with('translate_category')->where('status', 'active')->select('id','status')->get();
       return view('Admin.CreateSubCategory', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
        'category_id' => 'required|integer',
        'name' => 'required|string',
        'slug' => 'required|string',
        'status' => 'required|string'
       ]);

       $subcategory = new subcategory();
       $subcategory->category_id = $request->category_id;
       $subcategory->slug = $request->slug;
       $subcategory->agent_id = 0;
       $subcategory->status = $request->status;
       $subcategory->save();

       $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
            $translate = new TranslateSubcategory();
            $translate->subcategory_id = $subcategory->id;
            $translate->lang_code = $language->lang_code;
            $translate->name = $request->name;
            $translate->save();
        }

       $message = "Insert Successfully!";
       $notification = array('message' => $message,'alert-type' => 'success');
       return redirect()->route('sub-category.edit',$subcategory->id)->with($notification);

    }
    public function edit($id)
    {
        $subcategory = subcategory::with('translate_subcategory')->find($id);
        $categories = category::with('translate_category')->where('status', 'active')->select('id','status')->get();
        return view('Admin.EditSubCategory',compact('subcategory','categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
        'category_id' => 'required|integer',
        'name' => 'required|string',
        'slug' => 'required|string',
        'status' => 'required|string'
        ]);
        $subcategory = subcategory::find($id);
        $subcategory->category_id = $request->category_id;
        $subcategory->slug = $request->slug;
        $subcategory->agent_id = $subcategory->agent_id;
        $subcategory->status = $request->status;
        $subcategory->save();

        $translate = TranslateSubcategory::where('subcategory_id',$id)->where('lang_code','en')->first();
        $translate->subcategory_id = $translate->subcategory_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->save();

        $message = "Update Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        $subcategory = subcategory::find($id);
        $subcategory->delete();
        TranslateSubcategory::where('subcategory_id',$id)->delete();
        $message = "Dalete Successfully!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function editLanguage($subCategoryId,$langCode)
    {
        $subcategory =  subcategory::with('translate_subcategory')->find($subCategoryId);
        $translate_sub_category =  TranslateSubcategory::where('subcategory_id',$subCategoryId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditSubCategory',compact('translate_sub_category','subcategory','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string'
           ]);

        $tr = TranslateSubcategory::find($id);
        $tr->subcategory_id = $tr->subcategory_id;
        $tr->lang_code = $tr->lang_code;
        $tr->name = $request->name;
        $tr->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }
    public function Status($id)
    {
        $update_status = 'active';
        $subcategory = subcategory::find($id);
        if($subcategory->status == 'active')
        {
            $update_status = 'inactive';
        }else{
            $update_status = 'active';
        }
        $subcategory->update([
            'status' => $update_status
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Status Updated',
        ]);   
    }
}
