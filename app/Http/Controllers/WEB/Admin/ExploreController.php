<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListingExplores;
use App\Models\category;
use App\Models\Language;
use App\Models\TranslateListingExplores;
use Str;
use Image;
use File;

class ExploreController extends Controller
{
    public function index()
    {
        $exploreProperties =  ListingExplores::with('listingproperty_translate')->orderBy('id','ASC')->paginate(10);
        return view('Admin.Explores',compact('exploreProperties'));
    }

    public function create()
    {
        $categories = category::with('translate_category')->orderBy('id','ASC')->get();
        return view('Admin.CreateExplore',compact('categories')); 
    }
    public function edit($id)
    {
        $exploreProperty =  ListingExplores::with('listingproperty_translate')->find($id);
        return view('Admin.EditExplore',compact('exploreProperty'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_slug' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'explore_description' => 'required|string',
        ]);
        $listingExplore = ListingExplores::find($id);
        $old_image = $listingExplore->image;
        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->image)
                ->save(public_path().'/'.$image_name);
        }else{
            $image_name = $old_image;
        }
        $listingExplore->category_slug = $request->category_slug;
        $listingExplore->image = $image_name;
        $listingExplore->save();

        $translate = TranslateListingExplores::where('explore_listing_id',$id)
                                              ->where('lang_code','en')->first();
        $translate->explore_listing_id = $id;
        $translate->lang_code = $language->lang_code;
        $translate->title = $request->title;
        $translate->description = $request->explore_description;
        $translate->content = $request->content;
        $translate->save();

        $message = "Update successfully";
        $notification = array('message'=>$message,'alert-type'=>'success');
        return redirect()->route('explore.edit',$listingExplore->id)->with($notification);
    }
    public function editLanguage($exploreId,$langCode)
    {
        $exploreProperty =  ListingExplores::with('listingproperty_translate')->find($exploreId);
        $translate_explore =  TranslateListingExplores::where('explore_listing_id',$exploreId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditExplore',compact('translate_explore','exploreProperty','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string',
            'footerContent' => 'required|string',
            'explore_description' => 'required|string',
        ]);

        $translate = TranslateListingExplores::find($id);
        $translate->explore_listing_id = $translate->id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->description = $request->explore_description;
        $translate->content = $request->footerContent;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }
}
