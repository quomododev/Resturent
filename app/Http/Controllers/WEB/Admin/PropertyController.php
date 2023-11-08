<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Listing;
use App\Models\Language;
use App\Models\category;
use App\Models\TranslateProperty;
use App\Models\subcategory;
use App\Models\childcategory;
use App\Models\country;
use App\Models\State;
use App\Models\city;
use App\Models\LotFeatur;
use App\Models\TranslateLotFeature;
use App\Models\IndoreFeature;
use App\Models\TranslateIndoreFeature;
use App\Models\OutdoorFeature;
use App\Models\TranslateOutdoorFeature;
use App\Models\FlorPlan;
use App\Models\TranslateFlorPlan;
use App\Models\ImageGallery;
use App\Models\User;
use Str;
use File;
use Image;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Listing::with('property.property_translate')->paginate(8);
        return view('Admin.properties',compact('properties'));
    }
    public function create()
    {
        $agents = User::with('translate_agent')->where('is_agent',1)->get();
        $subCategories = subcategory::with('translate_subcategory')->where('category_id',30)->where('status','active')->get();
        $countries = country::with('translate_country')->where('status','active')->get();
        $lot_features = LotFeatur::with('lotfeature_translate')->get();
        $indoor_features = IndoreFeature::with('indorefeature_translate')->get();
        $outdoor_features = OutdoorFeature::with('outdoorfeature_translate')->get();
        
        return view('Admin.CreateProperty',compact('agents','subCategories','countries','lot_features','indoor_features','outdoor_features'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5|unique:propertiey_translate,title',
            'slug' => 'required|string|min:5|unique:listings,slug',
            'category_id' => 'required|integer',
            'country_id' => 'required|integer',
            'agent_id' => 'required|integer',
            'purpose' => 'required|string',
            'price' => 'required|numeric',
            'address' => 'required',
            'google_map' => 'required|string',
            'total_bedroom' => 'required|integer',
            'total_bathroom' => 'required|integer',
            'total_pool' => 'required|integer',
            'total_floor' => 'required|integer',
            'total_kitchen' => 'required|integer',
            'total_area' => 'required',
            'lot_size' => 'required',
            'garage_size' => 'required',
            'garden_size' => 'required',
            'lift_capacity' => 'required|integer',
            'property_description' => 'required|string',
            'first_video_id' =>  'required|string',
            'first_video_title' =>  'required|string',
            'first_video_description' =>  'required|string',
            'second_video_id' =>  'required|string',
            'second_video_title' =>  'required|string',
            'second_video_description' =>  'required|string',
        ],);
        $category = category::find($request->category_id);
        $category_type = $category->slug;
        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        if($request->thumbnail_image){
            $extention = $request->thumbnail_image->getClientOriginalExtension();
            $thumbnail_image = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $thumbnail_image = 'uploads/custom-images/'.$thumbnail_image;
            Image::make($request->thumbnail_image)
                ->save(public_path().'/'.$thumbnail_image);
        }
        $listing = new Listing();
        $listing->slug = $request->slug;
        $listing->category_id = $request->category_id;
        $listing->category_type = 'property';
        $listing->subcategory_id = $request->sub_category_id;
        $listing->childcategory_id = $request->child_category_id;
        $listing->country_id = $request->country_id;
        $listing->state_id = $request->state_id;
        $listing->city_id = $request->city_id;
        $listing->agent_id = $request->agent_id;
        $listing->agency_id = 0;
        $listing->thumbnail_image = $thumbnail_image;
        $listing->purpose = $request->purpose;
        $listing->price = $request->price;
        $listing->rent_period = $request->rent_period;
        $listing->google_map = $request->google_map;
        $listing->status = $request->status ? 'enabled' : 'disabled';
        $listing->is_featured = $request->is_feature ? 'enabled' : 'disabled';
        $listing->is_slider = $request->is_slider ? 'enabled' : 'disabled';
        $listing->category_page_slider = $request->category_page_slider ? 'enabled' : 'disabled';
        $listing->is_approved = 'enabled';
        $listing->is_banned = 'disabled';
        $listing->save();


        if($request->first_video_thumbnail){
            $extention = $request->first_video_thumbnail->getClientOriginalExtension();
            $image_name = Str::slug($request->first_video_id).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $first_video_thumbnail = 'uploads/custom-images/'.$image_name;
            Image::make($request->first_video_thumbnail)
                ->save(public_path().'/'.$image_name);
        }
        if($request->second_video_thumbnail){
            $extention = $request->second_video_thumbnail->getClientOriginalExtension();
            $image_name = Str::slug($request->second_video_id).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $second_video_thumbnail = 'uploads/custom-images/'.$image_name;
            Image::make($request->second_video_thumbnail)
                ->save(public_path().'/'.$image_name);
        }
        $property =new Property();
        $property->listing_id = $listing->id;
        $property->total_bedroom = $request->total_bedroom;
        $property->total_bathroom = $request->total_bathroom;
        $property->total_pool = $request->total_pool;
        $property->total_floor = $request->total_floor;
        $property->total_kitchen = $request->total_kitchen;
        $property->total_area = $request->total_area;
        $property->lot_size = $request->lot_size;
        $property->garage_size = $request->garage_size;
        $property->garden_size = $request->garden_size;
        $property->lift_capacity = $request->lift_capacity;
        $property->lot_features = json_encode($request->lot_feature_ids);
        $property->indoor_features = json_encode($request->indoor_feature_ids);
        $property->outdoor_features = json_encode($request->outdoor_feature_ids);
        $property->first_video_thumbnail = $first_video_thumbnail;
        $property->first_video_id = $request->first_video_id;
        $property->second_video_id = $request->second_video_id;
        $property->second_video_thumbnail = $second_video_thumbnail;
        $property->save();

       
        foreach($languages as $language)
        {
        $translate = new TranslateProperty();
        $translate->property_id = $property->id;
        $translate->lang_code = $language->lang_code;
        $translate->title = $request->title;
        $translate->address = $request->address;
        $translate->description = $request->property_description;
        $translate->video_title_one = $request->first_video_title;
        $translate->video_description_one = $request->first_video_description;
        $translate->video_title_two = $request->second_video_title;
        $translate->video_description_two = $request->second_video_description;
        $translate->save();
        }

        if($request->plan_images && $request->plan_titles && $request->plan_descriptions){
            foreach($request->plan_images as $index => $image){
                if($request->plan_images[$index] && $request->plan_titles[$index] && $request->plan_descriptions[$index]){
                    $extention = $image->getClientOriginalExtension();
                    $image_name = 'Property-plan'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                    $image_name = 'uploads/custom-images/'.$image_name;
                    Image::make($image)
                        ->encode('webp', 80)
                        ->save(public_path().'/'.$image_name);

                    $plan = new FlorPlan();
                    $plan->listing_id = $listing->id;
                    $plan->plan_image = $image_name;
                    $plan->save();

                    foreach($languages as $language)
                    {
                      $translate = new TranslateFlorPlan();
                      $translate->flor_plan_id = $plan->id;
                      $translate->lang_code = $language->lang_code;
                      $translate->title = $request->plan_titles[$index];
                      $translate->description = $request->plan_descriptions[$index];
                      $translate->save();
                    }
                }
            }
        }
        $message = "Insert Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('property.index')->with($notification);
    }
    public function edit($id)
    {
        $agents = User::with('translate_agent')->where('is_agent',1)->get();
        $subCategories = subcategory::with('translate_subcategory')->where('category_id',30)->where('status','active')->get();
        $countries = country::with('translate_country')->where('status','active')->get();
        $lot_features = LotFeatur::with('lotfeature_translate')->get();
        $indoor_features = IndoreFeature::with('indorefeature_translate')->get();
        $outdoor_features = OutdoorFeature::with('outdoorfeature_translate')->get();
        $property = Listing::with('property.property_translate','flor_plan.translate_florplan')->find($id);
        //return $property;
        return view('Admin.EditProperty',compact('property','agents','subCategories','countries','lot_features','indoor_features','outdoor_features'));
    }
    public function update(Request $request, $id)
    {
        //return $request->all();
        $request->validate([
            'title' => 'required|string|min:5',
            'slug' => 'required|string|min:5|unique:listings,slug,'.$id,
            'category_id' => 'required',
            'agent_id' => 'required|integer',
            'country_id' => 'required',
            'purpose' => 'required',
            'price' => 'required|numeric',
            'address' => 'required',
            'google_map' => 'required|string',
            'total_bedroom' => 'required|integer',
            'total_bathroom' => 'required|integer',
            'total_pool' => 'required|integer',
            'total_floor' => 'required|integer',
            'total_kitchen' => 'required|integer',
            'total_area' => 'required',
            'lot_size' => 'required',
            'garage_size' => 'required',
            'garden_size' => 'required',
            'lift_capacity' => 'required|integer',
            'property_description' => 'required|string',
            'first_video_id' =>  'required|string',
            'first_video_title' =>  'required|string',
            'first_video_description' =>  'required|string',
            'second_video_id' =>  'required|string',
            'second_video_title' =>  'required|string',
            'second_video_description' =>  'required|string',
        ]);
        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();
        $listing = Listing::find($id);
        if($request->thumbnail_image){
            $extention = $request->thumbnail_image->getClientOriginalExtension();
            $thumbnail_image = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $thumbnail_image = 'uploads/custom-images/'.$thumbnail_image;
            Image::make($request->thumbnail_image)
                ->save(public_path().'/'.$thumbnail_image);
        }else{
            $thumbnail_image = $listing->thumbnail_image;
        }

        $listing = Listing::find($id);
        $listing->slug = $request->slug;
        $listing->category_id = $request->category_id;
        $listing->category_type = 'property';
        $listing->subcategory_id = $request->sub_category_id;
        $listing->childcategory_id = $request->child_category_id;
        $listing->country_id = $request->country_id;
        $listing->state_id = $request->state_id;
        $listing->city_id = $request->city_id;
        $listing->agent_id = $request->agent_id;
        $listing->agency_id = 0;
        $listing->thumbnail_image = $thumbnail_image;
        $listing->purpose = $request->purpose;
        $listing->price = $request->price;
        $listing->rent_period = $request->rent_period;
        $listing->google_map = $request->google_map;
        $listing->status = $request->status ? 'active' : 'inactive';
        $listing->is_featured = $request->is_feature ? 'enable' : 'disabled';
        $listing->is_slider = $request->is_slider ? 'enabled' : 'disabled';
        $listing->is_approved = $request->is_approved ? 'enable' : 'disabled';
        $listing->is_banned = $request->is_banned ? 'enable' : 'disabled';
        $listing->category_page_slider = $request->category_page_slider ? 'enabled' : 'disabled';
        $listing->save();

        $property = Property::where('listing_id',$id)->first();
        if($request->first_video_thumbnail){
            $extention = $request->first_video_thumbnail->getClientOriginalExtension();
            $image_name = Str::slug($request->first_video_id).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $first_video_thumbnail = 'uploads/custom-images/'.$image_name;
            Image::make($request->first_video_thumbnail)
                ->save(public_path().'/'.$image_name);
        }
        else{
            $first_video_thumbnail = $property->first_video_thumbnail;
        }
        if($request->second_video_thumbnail){
            $extention = $request->second_video_thumbnail->getClientOriginalExtension();
            $image_name = Str::slug($request->second_video_id).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $second_video_thumbnail = 'uploads/custom-images/'.$image_name;
            Image::make($request->second_video_thumbnail)
                ->save(public_path().'/'.$image_name);
        }
        else{
            $second_video_thumbnail = $property->second_video_thumbnail;
        }
        $property->listing_id = $listing->id;
        $property->total_bedroom = $request->total_bedroom;
        $property->total_bathroom = $request->total_bathroom;
        $property->total_pool = $request->total_pool;
        $property->total_floor = $request->total_floor;
        $property->total_kitchen = $request->total_kitchen;
        $property->total_area = $request->total_area;
        $property->lot_size = $request->lot_size;
        $property->garage_size = $request->garage_size;
        $property->garden_size = $request->garden_size;
        $property->lift_capacity = $request->lift_capacity;
        $property->lot_features = json_encode($request->lot_feature_ids);
        $property->indoor_features = json_encode($request->indoor_feature_ids);
        $property->outdoor_features = json_encode($request->outdoor_feature_ids);
        $property->first_video_thumbnail = $first_video_thumbnail;
        $property->first_video_id = $request->first_video_id;
        $property->second_video_id = $request->second_video_id;
        $property->second_video_thumbnail = $second_video_thumbnail;
        $property->save();

        $translate = TranslateProperty::where('property_id',$property->id)->where('lang_code','en')->first();
        $translate->property_id = $property->id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->address = $request->address;
        $translate->description = $request->property_description;
        $translate->video_title_one = $request->first_video_title;
        $translate->video_description_one = $request->first_video_description;
        $translate->video_title_two = $request->second_video_title;
        $translate->video_description_two = $request->second_video_description;
        $translate->save();

        if($request->existing_plan_ids && $request->existing_plan_titles && $request->existing_plan_descriptions){
            foreach($request->existing_plan_ids as $index => $plan_id){
                if($request->existing_plan_ids[$index] && $request->existing_plan_titles[$index] && $request->existing_plan_descriptions[$index]){
                    $plan = FlorPlan::find($request->existing_plan_ids[$index]);
                    $ex_name = 'existing_plan_image_'.$plan_id;
                    $request_exist_image = $request->$ex_name;
                    if($request_exist_image){
                        $exist_image = $plan->image;
                        $extention = $request_exist_image->getClientOriginalExtension();
                        $image_name = 'Property-plan'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                        $image_name = 'uploads/custom-images/'.$image_name;
                        Image::make($request_exist_image)
                            ->encode('webp', 80)
                            ->save(public_path().'/'.$image_name);
                        $plan->image = $image_name;
                        $plan->save();
                        if($exist_image){
                            if(File::exists(public_path().'/'.$exist_image))unlink(public_path().'/'.$exist_image);
                        }
                    }

                      $translate = TranslateFlorPlan::where('flor_plan_id',$plan->id)->where('lang_code','en')->first();
                      $translate->flor_plan_id = $plan->id;
                      $translate->lang_code = $translate->lang_code;
                      $translate->title = $request->existing_plan_titles[$index];
                      $translate->description = $request->existing_plan_descriptions[$index];
                      $translate->save();
                }
            }
        }
        if($request->plan_images && $request->plan_titles && $request->plan_descriptions){
            foreach($request->plan_images as $index => $image){
                if($request->plan_images[$index] && $request->plan_titles[$index] && $request->plan_descriptions[$index]){
                    $extention = $image->getClientOriginalExtension();
                    $image_name = 'Flor-plan'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                    $image_name = 'uploads/custom-images/'.$image_name;
                    Image::make($image)
                        ->encode('webp', 80)
                        ->save(public_path().'/'.$image_name);

                    $plan = new FlorPlan();
                    $plan->listing_id = $listing->id;
                    $plan->plan_image = $image_name;
                    $plan->save();

                    foreach($languages as $language)
                    {
                      $translate = new TranslateFlorPlan();
                      $translate->flor_plan_id = $plan->id;
                      $translate->lang_code = $language->lang_code;
                      $translate->title = $request->plan_titles[$index];
                      $translate->description = $request->plan_descriptions[$index];
                      $translate->save();
                    }
                }
            }
        }
        $message = "Update Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function editLanguage($listingId,$langCode)
    {
        $property = Listing::with('property.property_translate','flor_plan.translate_florplan')->find($listingId);
        $translate_property =  TranslateProperty::where('property_id',$property->property?->id)->where('lang_code',$langCode)->first();
        $flor_ids = $property->flor_plan->pluck('id')->toArray();
        $translate_florplan =  TranslateFlorPlan::whereIn('flor_plan_id',$flor_ids)->where('lang_code',$langCode)->get();
        $selected_language = Language::where('lang_code',$langCode)->select('name','lang_code')->first();
        return view('Admin.EditProperty',compact('translate_property','property','selected_language','translate_florplan'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $translate = TranslateProperty::find($id);
        $translate->property_id = $translate->property_id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->address = $request->address;
        $translate->description = $request->property_description;
        $translate->video_title_one = $request->first_video_title;
        $translate->video_description_one = $request->first_video_description;
        $translate->video_title_two = $request->second_video_title;
        $translate->video_description_two = $request->second_video_description;
        $translate->save();

        if($request->plan_ids && $request->plan_titles && $request->plan_descriptions){
            foreach($request->plan_ids as $index => $plan_id){
                if($request->plan_ids[$index] && $request->plan_titles[$index] && $request->plan_descriptions[$index]){
                    $plan = TranslateFlorPlan::find($request->plan_ids[$index]);
                    $plan->flor_plan_id = $plan->flor_plan_id;
                    $plan->lang_code    = $plan->lang_code;
                    $plan->title = $request->plan_titles[$index];
                    $plan->description = $request->plan_descriptions[$index];
                    $plan->save();
                }
            }
        }
        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function delete($id)
    {
        try{

            $listing = Listing::find($id);
            $existing_image = $listing->thumbnail_image;
            if($existing_image)
            {
                if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
            }
            $listing->delete();

            $property = Property::where('listing_id',$id)->first();
            $first_video_thumbnail_image = $property->first_video_thumbnail;
            $second_video_thumbnail_image = $property->second_video_thumbnail;
            if($first_video_thumbnail_image)
            {
                if(File::exists(public_path().'/'.$first_video_thumbnail_image))unlink(public_path().'/'.$first_video_thumbnail_image);
            }
            if($second_video_thumbnail_image)
            {
                if(File::exists(public_path().'/'.$second_video_thumbnail_image))unlink(public_path().'/'.$second_video_thumbnail_image);
            }
            $property->delete();

            $translateProperty = TranslateProperty::where('property_id',$property->id)->first();
            $translateProperty->delete();

            $florPlan = FlorPlan::where('listing_id',$id)->delete();
            $flor_ids = $florPlan->pluck('id')->toArray();
            $translateFlorplan =  TranslateFlorPlan::whereIn('flor_plan_id',$flor_ids)->delete();

            $message = "Update Successfully!!";
            $notification = array('message'=> $message,'alert-type' => 'success');
            return redirect()->back()->with($notification);

        }catch(Exception $e){

            $message = $e->getMessage();
            $notification = array('message'=> $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
        // ***************Delete Flor Plan**************//
    public function deleteFlorPlan($id)
    {
        $florPlan = FlorPlan::find($id);
        $existing_image = $florPlan->plan_image;
        if($existing_image)
        {
            if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
        }
        $florPlan->delete();
        TranslateFlorPlan::where('flor_plan_id', $id)->delete();
        return response()->json(array(
            'status' => 200,
            'message' => "Delete Successfully!!"
        ));
    }
    //************* Searching by ajax *****************//
    public function subCategory($id)
    {
        $subCategories = subcategory::with('translate_subcategory')->where('category_id',$id)->where('status','active')->get();
        return response()->json(array(
            'status' => 200,
            'subCategories' => $subCategories
        ));
    }
    public function childCategory($id)
    {
        $childCategories = childcategory::with('translate_child_category')->where('subcategory_id',$id)->where('status','active')->get();
        return response()->json(array(
            'status' => 200,
            'childCategories' => $childCategories
        ));
    }
    public function state($id)
    {
        $states = State::with('translate_state')->where('country_id',$id)->where('status','active')->get();
        return response()->json(array(
            'status' => 200,
            'states' => $states
        ));
    }
    public function city($id)
    {
        $cities = city::with('translate_city')->where('state_id',$id)->where('status','active')->get();
        return response()->json(array(
            'status' => 200,
            'cities' => $cities
        ));
    }

// ************Status Change function************
    public function status($id)
    {
        $update_status = 'active';
        $listing = Listing::find($id);
        if($listing->status == 'active')
        {
            $update_status = 'inactive';
        }else{
            $update_status = 'active';
        }
        $listing->update([
            'status' => $update_status
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Update Status',
        ]);   
    }
    // ******************Listing Images functionality***********************//
    public function imageGallery($id)
    {
        $listing = Listing::with('image_gallery','property.property_translate')->select('id','slug','thumbnail_image')->find($id);
        return view('Admin.ImageGallery',compact('listing'));
    }
    public function imageStore(Request $request)
    {
        $request->validate([
            'images' => 'required',
        ]);
        foreach($request->images as $index => $image)
        {
            if($request->images){
                $extention = $image->getClientOriginalExtension();
                $image_name = 'Property'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                $image_name = 'uploads/custom-images/'.$image_name;
                Image::make($image)
                    ->encode('webp', 80)
                    ->save(public_path().'/'.$image_name);
                $galerry = new ImageGallery();
                $galerry->listing_id = $request->listing_id;
                $galerry->image = $image_name;
                $galerry->save();
            }
            
        }
        $message = "Insert Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    public function imageDelete($id)
    {   
        $imageGallery = ImageGallery::find($id);
        $existing_image = $imageGallery->image;
        if($existing_image){
            if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
        }
        $imageGallery->delete();

        $message = "Delete Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
