<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildCategory;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\InteriorFeature;
use App\Models\ExteriorFeature;
use App\Models\SaftyFeature;
use App\Models\Car;
use App\Models\TranslateCar;
use App\Models\Language;
use App\Models\Specification;
use App\Models\TranslateSpecification;
use App\Models\User;
use Image;
use Str;
use File;

class CarController extends Controller
{
    public function index()
    {
        $cars = Listing::has('car')->with('car.translate_car')->paginate(8);
        return view('Admin.Cars',compact('cars'));
        
    }
    public function create()
    {
        $agents = User::with('translate_agent')->where('is_agent',1)->get();
        $subCategories = subcategory::with('translate_subcategory')->where('category_id',32)->where('status','active')->get();
        $countries = country::with('translate_country')->where('status','active')->get();
        $interior_features = InteriorFeature::with('translate_interiorfeature')->get();
        $exterior_features = ExteriorFeature::with('translate_exterior_feature')->get();
        $safty_features = SaftyFeature::with('translate_safty_feature')->get();
        
        return view('Admin.CreateCar',compact('agents','subCategories','countries','interior_features','exterior_features','safty_features'));
    }

    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'title' => 'required|string|min:5|unique:propertiey_translate,title',
            'slug' => 'required|string|min:5|unique:listings,slug',
            'category_id' => 'required',
            'agent_id' => 'required|integer',
            'country_id' => 'required',
            'purpose' => 'required',
            'price' => 'required|numeric',
            'address' => 'required',
            'google_map' => 'required|string',
            'fuel_type' => 'required|string',
            'mileage' => 'required|string',
            'year' => 'required|string',
            'transmission' => 'required|string',
            'drive_type' => 'required|string',
            'condition' => 'required',
            'engine_type' => 'required',
            'total_door' => 'required|integer',
            'cylinder' =>  'required|string',
            'vin' =>  'required|string',
            'car_description' => 'required|string',
        ],);
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
        $listing->category_type = 'car';
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
        $listing->is_approved = 'enabled';
        $listing->is_banned = 'disabled';
        $listing->save();


        $car = new Car();
        $car->listing_id = $listing->id;
        $car->fuel_type = $request->fuel_type;
        $car->mileage = $request->mileage;
        $car->year = $request->year;
        $car->transmission = $request->transmission;
        $car->drive_type = $request->drive_type;
        $car->conditions = $request->condition;
        $car->engine_size = $request->engine_type;
        $car->number_of_doors = $request->total_door;
        $car->cylinders = $request->cylinder;
        $car->vin = $request->vin;
        $car->interior = json_encode($request->interior_feature_ids);
        $car->exterior = json_encode($request->exterior_feature_ids);
        $car->safty = json_encode($request->safty_feature_ids);
        $car->save();

       
        foreach($languages as $language)
        {
        $translate = new TranslateCar();
        $translate->car_id = $car->id;
        $translate->lang_code = $language->lang_code;
        $translate->title = $request->title;
        $translate->address = $request->address;
        $translate->description = $request->car_description;
        $translate->save();
        }

        if($request->specification_images && $request->specification_titles && $request->specification_descriptions){
            foreach($request->specification_images as $index => $image){
                if($request->specification_images[$index] && $request->specification_titles[$index] && $request->specification_descriptions[$index]){
                    $extention = $image->getClientOriginalExtension();
                    $image_name = 'Property-plan'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                    $image_name = 'uploads/custom-images/'.$image_name;
                    Image::make($image)
                        ->encode('webp', 80)
                        ->save(public_path().'/'.$image_name);

                    $specification = new Specification();
                    $specification->listing_id = $listing->id;
                    $specification->image = $image_name;
                    $specification->save();

                    foreach($languages as $language)
                    {
                      $translate = new TranslateSpecification();
                      $translate->specification_id = $specification->id;
                      $translate->lang_code = $language->lang_code;
                      $translate->title = $request->specification_titles[$index];
                      $translate->description = $request->specification_descriptions[$index];
                      $translate->save();
                    }
                }
            }
        }
        $message = "Insert Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('cars.index')->with($notification);
    }
    public function edit($id)
    {
        $agents = User::with('translate_agent')->where('is_agent',1)->get();
        $subCategories = subcategory::with('translate_subcategory')->where('category_id',32)->where('status','active')->get();
        $countries = country::with('translate_country')->where('status','active')->get();
        $interior_features = InteriorFeature::with('translate_interiorfeature')->get();
        $exterior_features = ExteriorFeature::with('translate_exterior_feature')->get();
        $safty_features = SaftyFeature::with('translate_safty_feature')->get();

        $car = Listing::has('car')->with('car.translate_car','specification.translate_specification')->find($id);
        //return $car;
        return view('Admin.EditCar',compact('car','agents','subCategories','countries','interior_features','exterior_features','safty_features'));
    }
    public function update(Request $request, $id)
    {
        //return $request->all();
        $request->validate([
            'title' => 'required|string|min:5',
            'slug' => 'required|string|min:5|unique:listings,slug,'.$id,
            'category_id' => 'required',
            'country_id' => 'required',
            'purpose' => 'required',
            'price' => 'required|numeric',
            'address' => 'required',
            'google_map' => 'required|string',
            'fuel_type' => 'required|string',
            'mileage' => 'required|string',
            'year' => 'required|string',
            'transmission' => 'required|string',
            'drive_type' => 'required|string',
            'condition' => 'required',
            'engine_type' => 'required',
            'total_door' => 'required|integer',
            'cylinder' =>  'required|string',
            'vin' =>  'required|string',
            'car_description' => 'required|string',
        ],);
        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        $listing = Listing::find($id);
        if($request->thumbnail_image){
            $extention = $request->thumbnail_image->getClientOriginalExtension();
            $thumbnail_image = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $thumbnail_image = 'uploads/custom-images/'.$thumbnail_image;
            Image::make($request->thumbnail_image)
                ->save(public_path().'/'.$thumbnail_image);

               $exist_image = $listing->thumbnail_image; 
                if($exist_image){
                    if(File::exists(public_path().'/'.$exist_image))unlink(public_path().'/'.$exist_image);
                }
        }else{
            $thumbnail_image = $listing->thumbnail_image;
        }

        $listing->slug = $request->slug;
        $listing->category_id = $request->category_id;
        $listing->category_type = 'car';
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
        $listing->is_approved = 'enabled';
        $listing->is_banned = 'disabled';
        $listing->save();


        $car = Car::where('listing_id',$id)->first();
        $car->listing_id = $listing->id;
        $car->fuel_type = $request->fuel_type;
        $car->mileage = $request->mileage;
        $car->year = $request->year;
        $car->transmission = $request->transmission;
        $car->drive_type = $request->drive_type;
        $car->conditions = $request->condition;
        $car->engine_size = $request->engine_type;
        $car->number_of_doors = $request->total_door;
        $car->cylinders = $request->cylinder;
        $car->vin = $request->vin;
        $car->interior = json_encode($request->interior_feature_ids);
        $car->exterior = json_encode($request->exterior_feature_ids);
        $car->safty = json_encode($request->safty_feature_ids);
        $car->save();
       

        $translate = TranslateCar::where('car_id', $car->id)->where('lang_code','en')->first();
        $translate->car_id = $translate->car_id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->address = $request->address;
        $translate->description = $request->car_description;
        $translate->save();
        
        
        if($request->existing_specification_ids && $request->existing_specification_titles && $request->existing_specification_descriptions){
            foreach($request->existing_specification_ids as $index => $specification_id){
                if($request->existing_specification_ids[$index] && $request->existing_specification_titles[$index] && $request->existing_specification_descriptions[$index]){
                    $specification = Specification::find($request->existing_specification_ids[$index]);
                    $ex_name = 'existing_plan_image_'.$specification_id;
                    $request_exist_image = $request->$ex_name;
                    if($request_exist_image){
                        $exist_image = $specification->image;
                        $extention = $request_exist_image->getClientOriginalExtension();
                        $image_name = 'Car-specification'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                        $image_name = 'uploads/custom-images/'.$image_name;
                        Image::make($request_exist_image)
                            ->encode('webp', 80)
                            ->save(public_path().'/'.$image_name);
                        $specification->image = $image_name;
                        $specification->save();
                        if($exist_image){
                            if(File::exists(public_path().'/'.$exist_image))unlink(public_path().'/'.$exist_image);
                        }
                    }
                      $translate = TranslateSpecification::where('specification_id',$specification->id)->where('lang_code','en')->first();
                      $translate->specification_id = $translate->specification_id;
                      $translate->lang_code = $translate->lang_code;
                      $translate->title = $request->existing_specification_titles[$index];
                      $translate->description = $request->existing_specification_descriptions[$index];
                      $translate->save();
                }
            }
        }
        if($request->specification_images && $request->specification_titles && $request->specification_descriptions){
            foreach($request->specification_images as $index => $image){
                if($request->specification_images[$index] && $request->specification_titles[$index] && $request->specification_descriptions[$index]){
                    $extention = $image->getClientOriginalExtension();
                    $image_name = 'Property-plan'.date('-Y-m-d-h-i-s-').rand(999,9999).'.webp';
                    $image_name = 'uploads/custom-images/'.$image_name;
                    Image::make($image)
                        ->encode('webp', 80)
                        ->save(public_path().'/'.$image_name);

                    $specification = new Specification();
                    $specification->listing_id = $listing->id;
                    $specification->image = $image_name;
                    $specification->save();

                    foreach($languages as $language)
                    {
                      $translate = new TranslateSpecification();
                      $translate->specification_id = $specification->id;
                      $translate->lang_code = $language->lang_code;
                      $translate->title = $request->specification_titles[$index];
                      $translate->description = $request->specification_descriptions[$index];
                      $translate->save();
                    }
                }
            }
        }
        $message = "Update Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('cars.index')->with($notification);
    }

    public function editLanguage($listingId,$langCode)
    {

        $car = Listing::with('car.translate_car','specification.translate_specification')->find($listingId);
        $translate_car =  TranslateCar::where('car_id',$car->car?->id)->where('lang_code',$langCode)->first();
        $specification_ids = $car->specification->pluck('id')->toArray();
        $translate_specification =  TranslateSpecification::whereIn('specification_id',$specification_ids)->where('lang_code',$langCode)->get();
        $selected_language = Language::where('lang_code',$langCode)->select('name','lang_code')->first();
        return view('Admin.EditCar',compact('translate_car','car','selected_language','translate_specification'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $translate = TranslateCar::find($id);
        $translate->car_id = $translate->car_id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->address = $request->address;
        $translate->description = $request->car_description;
        $translate->save();

        if($request->specification_ids && $request->specification_titles && $request->specification_descriptions){
            foreach($request->specification_ids as $index => $specification_ids){
                if($request->specification_ids[$index] && $request->specification_titles[$index] && $request->specification_descriptions[$index]){
                    $specification = TranslateSpecification::find($request->specification_ids[$index]);
                    $specification->specification_id = $specification->specification_id;
                    $specification->lang_code        = $specification->lang_code;
                    $specification->title            = $request->specification_titles[$index];
                    $specification->description      = $request->specification_descriptions[$index];
                    $specification->save();
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

            $car = Car::where('listing_id',$id)->first();
            $car->delete();

            $translateCar = TranslateCar::where('car_id',$car->id)->get();
            $translateCar->delete();

            $specification = Specification::where('listing_id',$id)->delete();
            $specification_ids = $specification->pluck('id')->toArray();
            TranslateSpecification::whereIn('specification_id',$specification_ids)->delete();

            $message = "Update Successfully!!";
            $notification = array('message'=> $message,'alert-type' => 'success');
            return redirect()->back()->with($notification);

        }catch(Exception $e){

            $message = $e->getMessage();
            $notification = array('message'=> $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
    
    //************* Delete Car Specification *****************//
    public function deleteSpecification($id)
    {
        $specification = Specification::find($id);
        $existing_image = $specification->plan_image;
        if($existing_image)
        {
            if(File::exists(public_path().'/'.$existing_image))unlink(public_path().'/'.$existing_image);
        }
        $specification->delete();

        TranslateSpecification::where('specification_id', $id)->delete();
        return response()->json(array(
            'status' => 200,
            'message' => "Delete Successfully!!"
        ));
    }
}
