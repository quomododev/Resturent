<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\blog_category;
use App\Models\BlogCategoryTranslate;
use App\Models\BlogTranslate;
use App\Models\TranslateAboutUs;
use App\Models\TranslateUser;
use App\Models\TranslateContactpage;
use App\Models\TranslateSubcategory;
use App\Models\TranslateCar;
use App\Models\TranslateSpecification;
use App\Models\TranslateColor;
use App\Models\TranslateExteriorFeature;
use App\Models\TranslateFaq;
use App\Models\TranslateLotFeatur;
use App\Models\TranslateOurFeature;
use App\Models\TranslateOutdoorFeature;
use App\Models\TranslateTermsandCondition;
use App\Models\TranslateProperty;
use App\Models\TranslateFlorPlan;
use App\Models\TranslateSaftyFeature;
use App\Models\TranslateSlider;
use App\Models\TranslateTeam;
use App\Models\TranslateTestimonial;
use App\Models\TranslateWhychooseus;
use App\Models\TranslateCategory;
use App\Models\TranslateChildCategory;
use App\Models\TranslateCountry;
use App\Models\TranslateState;
use App\Models\TranslateCity;
use App\Models\TranslateListingExplores;
use App\Models\TranslateAgency;

use App\Test;

use Validator;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::orderBy('id','ASC')->paginate(8);
        return view('Admin.Language',compact('languages'));
    }
    public function create()
    {
        return view('Admin.CreateLanguage');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'lang_code' => 'required|string',
            'text_direction' => 'required|string',
            'status' => 'required',
        ]);
        //*****************About us ***************
        $aboutus_languages = TranslateAboutUs::where('lang_code','en')->get();
        foreach($aboutus_languages as $language)
        {
            $about_us = new TranslateAboutUs();
            $about_us->aboutus_id = $language->aboutus_id;
            $about_us->lang_code = $request->lang_code;
            $about_us->title = $language->title;
            $about_us->main_title = $language->main_title;
            $about_us->description = $language->description;
            $about_us->save();
        }

        //***************** Agency ***************
        $agency_languages = TranslateAgency::where('lang_code','en')->get();  
        foreach($agency_languages as $language)
        {
          $translate = new TranslateAgency();
          $translate->agency_id = $language->agency_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->address_one = $language->address_one;
          $translate->address_two = $language->address_two;
          $translate->description = $language->description;
          $translate->save();
        }

        //*****************User ***************
        $user_languages = TranslateUser::where('lang_code','en')->get();
        foreach($user_languages as $language)
        {
          $translate = new TranslateUser();
          $translate->user_id = $language->user_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->designation = $language->designation;
          $translate->address = $language->address;
          $translate->save();
        }
       //*****************Blog Category ***************
        $languages = BlogCategoryTranslate::where('lang_code','en')->get();
        foreach($languages as $language)
        {
            $blogCategoryTranslate = new BlogCategoryTranslate();
            $blogCategoryTranslate->blog_category_id = $language->blog_category_id;
            $blogCategoryTranslate->lang_code = $request->lang_code;
            $blogCategoryTranslate->name = $language->name;
            $blogCategoryTranslate->save();
        }

        
        //*****************Blog ***************
        $blog_languages = BlogTranslate::where('lang_code','en')->get();
        foreach($blog_languages as $language)
        {
            $blogTranslate = new BlogTranslate();
            $blogTranslate->blog_id = $language->blog_id;
            $blogTranslate->lang_code = $request->lang_code;
            $blogTranslate->title = $language->title;
            $blogTranslate->description = $language->description;
            $blogTranslate->seo_title = $language->seo_title;
            $blogTranslate->seo_description = $language->seo_description;
            $blogTranslate->save();
        }
        //*****************Category***************
        $category_languages = TranslateCategory::where('lang_code','en')->get();
        foreach($category_languages as $language)
        {
            $translate = new TranslateCategory();
            $translate->category_id = $language->category_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }

        //*****************Conatct Us***************
        $contact_languages = TranslateContactpage::where('lang_code','en')->get();
        foreach($contact_languages as $language)
        {
            $translate = new TranslateContactpage();
            $translate->contact_id = $language->contact_id;
            $translate->lang_code = $request->lang_code;
            $translate->heading = $language->heading;
            $translate->title = $language->title;
            $translate->description = $language->description;
            $translate->heading2 = $language->heading2;
            $translate->title2 = $language->title2;
            $translate->description2 = $language->description2;
            $translate->address = $language->address;
            $translate->save();
        }
        //*****************Sub-Category***************
        $sub_category_languages = TranslateSubcategory::where('lang_code','en')->get();
        foreach($sub_category_languages as $language)
        {
            $translate = new TranslateSubcategory();
            $translate->subcategory_id = $language->subcategory_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }
        //*****************Child Category***************
        $child_category_languages = TranslateChildCategory::where('lang_code','en')->get();
        foreach($child_category_languages as $language)
        {
            $translate = new TranslateChildCategory();
            $translate->child_category_id = $language->child_category_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }
        //*****************Country***************
        $country_languages = TranslateCountry::where('lang_code','en')->get();
        foreach($country_languages as $language)
        {
            $translate = new TranslateCountry();
            $translate->country_id = $language->country_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }

        //*****************State***************
        $state_languages = TranslateState::where('lang_code','en')->get();
        foreach($state_languages as $language)
        {
            $translate = new TranslateState();
            $translate->state_id = $language->state_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }

        //*****************City***************
        $city_language = TranslateCity::where('lang_code','en')->get();
        foreach($city_language as $language)
        {
            $translate = new TranslateCity();
            $translate->city_id = $language->city_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }

        //*****************Car***************
        $car_languages = TranslateCar::where('lang_code','en')->get();
        foreach($car_languages as $language)
        {
        $translate = new TranslateCar();
        $translate->car_id = $language->car_id;
        $translate->lang_code = $request->lang_code;
        $translate->title = $language->title;
        $translate->address = $language->address;
        $translate->description = $language->description;
        $translate->save();
        }

        //*****************Translate Specification***************
        $specification_languages = TranslateSpecification::where('lang_code','en')->get();
        foreach($specification_languages as $language)
        {
            $translate = new TranslateSpecification();
            $translate->specification_id = $language->specification_id;
            $translate->lang_code = $request->lang_code;
            $translate->title = $language->title;
            $translate->description = $language->description;
            $translate->save();
        }

        //*****************Translate color***************
        $color_languages = TranslateColor::where('lang_code','en')->get();
        foreach($color_languages as $language)
        {
          $translate = new TranslateColor();
          $translate->color_id = $language->color_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->save();
        }
        //*****************Translate Exterior Feature***************
        $exterior_language = TranslateExteriorFeature::where('lang_code','en')->get();
        foreach($exterior_language as $language)
        {
          $translate = new TranslateExteriorFeature();
          $translate->exteriorfeature_id = $language->exteriorfeature_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->save();
        }

        //***************** Translate Explore ***************
        $faq_language = TranslateListingExplores::where('lang_code','en')->get();
        foreach($faq_language as $language)
        {
            $translate = new TranslateListingExplores();
            $translate->explore_listing_id = $language->explore_listing_id;
            $translate->lang_code = $request->lang_code;
            $translate->title = $language->title;
            $translate->description = $language->description;
            $translate->content = $language->content;
            $translate->save();
        }

        //***************** Translate FAQ ***************
        $faq_language = TranslateFaq::where('lang_code','en')->get();
        foreach($faq_language as $language)
        {
        $translate = new TranslateFaq();
        $translate->faq_id = $language->faq_id;
        $translate->lang_code = $request->lang_code;
        $translate->question = $language->question;
        $translate->answer = $language->answer;
        $translate->save();
        }

        //*****************Translate Lot feature***************
        $lotfeature_language = TranslateLotFeatur::where('lang_code','en')->get();
        foreach($lotfeature_language as $language)
        {
          $translate = new TranslateLotFeatur();
          $translate->lot_feature_id = $language->lot_feature_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->save();
        }
        //*****************Translate Our feature***************
        $ourfeature_language = TranslateOurFeature::where('lang_code','en')->get();
        foreach($ourfeature_language as $language)
        {
          $translate = new TranslateOurFeature();
          $translate->our_feature_id = $language->our_feature_id;
          $translate->lang_code = $request->lang_code;
          $translate->title = $language->title;
          $translate->description = $language->description;
          $translate->save();
        }
        //*****************Translate Outdoor feature***************
        $outdoorfeature_language = TranslateOutdoorFeature::where('lang_code','en')->get();
        foreach($outdoorfeature_language as $language)
        {
            $translate = new TranslateOutdoorFeature();
            $translate->outdoor_feature_id = $language->outdoor_feature_id;
            $translate->lang_code = $request->lang_code;
            $translate->name = $language->name;
            $translate->save();
        }


        //*****************Translate Terms and Condition***************
        $tandc_language = TranslateTermsandCondition::where('lang_code','en')->get();
        foreach($tandc_language as $language)
        {
            $translate = new TranslateTermsandCondition();
            $translate->tandc_id = $language->tandc_id;
            $translate->lang_code = $request->lang_code;
            $translate->termsandcondition = $language->termsandcondition;
            $translate->privacy = $language->privacy;
            $translate->save();
        }

         //*****************Translate Property***************
        $property_language = TranslateProperty::where('lang_code','en')->get();
        foreach($property_language as $language)
        {
        $translate = new TranslateProperty();
        $translate->property_id = $language->property_id;
        $translate->lang_code = $request->lang_code;
        $translate->title = $language->title;
        $translate->address = $language->address;
        $translate->description = $language->description;
        $translate->video_title_one = $language->video_title_one;
        $translate->video_description_one = $language->video_description_one;
        $translate->video_title_two = $language->video_title_two;
        $translate->video_description_two = $language->video_description_two;
        $translate->save();
        }
        //*****************Translate Floor plan***************
        $floor_language = TranslateFlorPlan::where('lang_code','en')->get();
        foreach($floor_language as $language)
        {
          $translate = new TranslateFlorPlan();
          $translate->flor_plan_id = $language->flor_plan_id;
          $translate->lang_code = $request->lang_code;
          $translate->title = $language->title;
          $translate->description = $language->description;
          $translate->save();
        }

        //*****************Translate Safty Feature***************
        $safetyfeature_language = TranslateSaftyFeature::where('lang_code','en')->get();
        foreach($safetyfeature_language as $language)
        {
          $translate = new TranslateSaftyFeature();
          $translate->saftyfeature_id = $language->saftyfeature_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->save();
        }

        //*****************Translate Slider***************
        $slider_language = TranslateSlider::where('lang_code','en')->get();
        foreach($slider_language as $language)
        {
        $translate = new TranslateSlider();
        $translate->slider_id = $language->slider_id;
        $translate->lang_code = $request->lang_code;
        $translate->title = $language->title;
        $translate->save();
        }

        //*****************Translate Team***************
        $team_language = TranslateTeam::where('lang_code','en')->get();
        foreach($team_language as $language)
        {
          $translate = new TranslateTeam();
          $translate->team_id = $language->team_id;
          $translate->lang_code = $request->lang_code;
          $translate->name = $language->name;
          $translate->designation = $language->designation;
          $translate->save();
        }

         //*****************Translate Testimonial***************
         $testimonial_language = TranslateTestimonial::where('lang_code','en')->get();
         foreach($testimonial_language as $language)
         {
           $translate = new TranslateTestimonial();
           $translate->testimonial_id = $language->testimonial_id;
           $translate->lang_code      = $request->lang_code;
           $translate->name           = $language->name;
           $translate->designation    = $language->designation;
           $translate->comment        = $language->comment;
           $translate->save();
         }

         //*****************Translate Team***************
         $testimonial_language = TranslateWhychooseus::where('lang_code','en')->get();
         foreach($testimonial_language as $language)
         {
           $translate = new TranslateWhychooseus();
           $translate->why_choose_us_id = $language->why_choose_us_id;
           $translate->lang_code = $request->lang_code;
           $translate->title = $language->title;
           $translate->description = $language->description;
           $translate->save();
         }

        $language = new Language();
        $language->name = $request->name;
        $language->lang_code = $request->lang_code;
        $language->text_direction = $request->text_direction;
        $language->status = $request->status;
        $language->save();

        $message = 'Created succssfully';
        $notification = array('messege'=>$message,'alert-type'=>'success');
        return redirect()->route('languages.index')->with($notification);
    }
    public function edit($id)
    {
        $language = Language::find($id);
        return view('Admin.EditLanguages',compact('language'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'code' => 'required|string',
            'text_direction' => 'required|string',
            'status' => 'required',
        ]);
        $language = Language::find($id);
        $language->name = $request->name;
        $language->lang_code = $request->code;
        $language->text_direction = $request->text_direction;
        $language->status = $request->status;
        $language->save();

        $message = 'Updtae succssfully';
        $notification = array('messege'=>$message,'alert-type'=>'success');
        return redirect()->route('languages.index')->with($notification);
        
    }

    public function delete($id)
    {
        $language = Language::find($id);
        $lang_code = $language->lang_code;

        TranslateAboutUs::where('lang_code',$lang_code)->delete();
        TranslateUser::where('lang_code',$lang_code)->delete();
        BlogCategoryTranslate::where('lang_code',$lang_code)->delete();
        BlogTranslate::where('lang_code',$lang_code)->delete();
        TranslateCategory::where('lang_code',$lang_code)->delete();
        TranslateContactpage::where('lang_code',$lang_code)->delete();
        TranslateSubcategory::where('lang_code',$lang_code)->delete();
        TranslateChildCategory::where('lang_code',$lang_code)->delete();
        TranslateCountry::where('lang_code',$lang_code)->delete();
        TranslateState::where('lang_code',$lang_code)->delete();
        TranslateCity::where('lang_code',$lang_code)->delete();
        TranslateCar::where('lang_code',$lang_code)->delete();
        TranslateSpecification::where('lang_code',$lang_code)->delete();
        TranslateColor::where('lang_code',$lang_code)->delete();
        TranslateExteriorFeature::where('lang_code',$lang_code)->delete();
        TranslateListingExplores::where('lang_code',$lang_code)->delete();
        TranslateFaq::where('lang_code',$lang_code)->delete();
        TranslateLotFeatur::where('lang_code',$lang_code)->delete();
        TranslateOurFeature::where('lang_code',$lang_code)->delete();
        TranslateOutdoorFeature::where('lang_code',$lang_code)->delete();
        TranslateTermsandCondition::where('lang_code',$lang_code)->delete();
        TranslateProperty::where('lang_code',$lang_code)->delete();
        TranslateFlorPlan::where('lang_code',$lang_code)->delete();
        TranslateSaftyFeature::where('lang_code',$lang_code)->delete();
        TranslateSlider::where('lang_code',$lang_code)->delete();
        TranslateTeam::where('lang_code',$lang_code)->delete();
        TranslateTestimonial::where('lang_code',$lang_code)->delete();
        TranslateWhychooseus::where('lang_code',$lang_code)->delete();
        $language->delete();

        $message = 'Delete succssfully';
        $notification = array('messege'=>$message,'alert-type'=>'success');
        return redirect()->back()->with($notification);

    }
    public function status($id)
    {
    try{
        $update_status = 'active';
        $language = Language::find($id);
        if($language->status == 'active')
        {
            $update_status = 'inactive';
        }else{
            $update_status = 'active';
        }
        $language->update([
            'status' => $update_status
        ]);
        return response()->json(array(
            'status' => 200,
            'update' => 'updated',
        ));
        }catch(\Exception $e)
        {
            return response()->json(array(
                'status' => 500,
                'update' => $e->getMessage(),
            ));
        }

    }
}
