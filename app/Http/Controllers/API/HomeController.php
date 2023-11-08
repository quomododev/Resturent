<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\category;
use App\Models\subcategory;
use App\Models\Partner;
use App\Models\blog;
use App\Models\blog_category;
use App\Models\testimonial;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Listing;
use App\Models\Property;
use App\Models\Car;
use App\Models\Language;
use App\Models\terms_and_condition;
use App\Models\why_choose_us;
use App\Models\Team;
use App\Models\about_us;
use App\Models\contact_page;
use App\Models\ListingExplores;
use App\Models\LotFeatur;
use App\Models\IndoreFeature;
use App\Models\OutdoorFeature;

use Session;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('lang')){
            $language = $request->lang;
            Session::put('front_lang', $language);
        }else{
            Session::put('front_lang', 'en');
        }

        $categories  = category::where('status','active')->get();
        $silders = Listing::with('property','car')->where('is_slider','enabled')->get();
        $featuredListings = Listing::with('property','car')->where('is_featured','enabled')->get();
        $whyChooseUs = why_choose_us::first();
        $explores = ListingExplores::with('listingproperty_translate_lang')->get();
        $ourPartners = Partner::orderBy('id','DESC')->take(6)->select('id','link','image')->get();
        $agents = User::where('is_agent',1)->where('status','active')->get();
        $blogs = blog::where('status','active')->take(5)->get();
        $testimonials = testimonial::where('status','active')->get();
        $galleries = Gallery::orderBy('id','DESC')->select('id','image')->take(8)->get();

        $languages = Language::where('status', 'active')->get();
       
        return response()->json([
            'categories' => $categories,
            'silders' => $silders,
            'featureListings' => $featuredListings,
            'whyChooseUs' => $whyChooseUs,
            'explores' => $explores,
            'partners' => $ourPartners,
            'agents' => $agents,
            'blogs' => $blogs,
            'testimonials' => $testimonials,
            'galleries' => $galleries,
            'languages' => $languages
          
        ]);
    }
    public function listingByCategory(Request $request,$slug)
    {
        if($request->has('lang')){
            $language = $request->lang;
            Session::put('front_lang', $language);
        }else{
            Session::put('front_lang', 'en');
        }
        $category = category::where('slug',$slug)->first();

       // $category = blog_category::where('slug',$slug)->first();

        $categories = subcategory::with('translate_subcategory')->where('category_id',$category->id)->get();

        $slider = Listing::with('property','car')->where('category_id',$category->id)->where('category_page_slider','enabled')->get();

        $featureProperty = Listing::with('property','car')->where('category_id',$category->id)->where('is_featured','enabled')->get();

        $newProperty = Listing::with('property','car')->where('category_id',$category->id)->orderBy('id','DESC')->take(8)->get();

        $blogs = blog::where('status','active')->take(5)->get();

        $agents = User::where('is_agent',1)->where('status','active')->get();
        
        return response()->json([
            'slider' => $slider,
            'categories' => $categories,
            'featureProperty' => $featureProperty,
            'newProperty' => $newProperty,
            'agents' => $agents,
            'blogs' => $blogs
            
        ]);
    }


    public function listingShow(Request $request,$slug)
    {
        if($request->has('lang')){
            $language = $request->lang;
            Session::put('front_lang', $language);
        }else{
            Session::put('front_lang', 'en');
        }
        $listing = Listing::with('property','image_gallery','car','agent.translate_agent_lang')->where('slug',$slug)->first();

        // ************Lot Features ********//
        $lotFeatureIds = json_decode($listing->property?->lot_features);
        $lotFeatures = LotFeatur::with('lotfeature_translate')->whereIn('id',$lotFeatureIds)->get();

         // ************Indoor Features ********//
         $indoorFeatureIds = json_decode($listing->property?->indoor_features);
         $indoorFeature = IndoreFeature::with('indorefeature_translate')->whereIn('id',$indoorFeatureIds)->get();

        // ************Outdoor Features ********//
        $outdoorFeatureIds = json_decode($listing->property?->outdoor_features);
        $outdoorFeature = OutdoorFeature::with('outdoorfeature_translate')->whereIn('id',$outdoorFeatureIds)->get();

        
        $relatedListings = Listing::with('property','car')->where('category_id',$listing->category_id)->where('id','!=',$listing->id)->take(4)->get();
        return response()->json([
            'listing' => $listing,
            'lotFeatures' => $lotFeatures,
            'indoorFeature' => $indoorFeature,
            'outdoorFeature' => $outdoorFeature,
            'relatedListing' => $relatedListings
        ]);
    }


    public function properties(Request $request)
    {
        $lang_code = Session::get('selected_language');
        $categories = Category::with(['translate_category_lang' => function ($query) use($lang_code){
            $query->where('lang_code', $lang_code);
        }])->get();

        $featureProperties = Listing::has('property')->where('is_featured','enabled')->with('property.property_translate_lang','car')->whereHas('property.property_translate_lang', function ($query) use($lang_code) {
            $query->where('lang_code','en');
        })->get();   
        
        $newandTrendingProperties = Listing::has('property')->with('property.property_translate_lang','car')->whereHas('property.property_translate_lang', function ($query) use($lang_code) {
            $query->where('lang_code','en');
        })
        ->orderBy('id','DESC')
        ->get();
        
        $agents = User::with(['translate_agent_lang' => function ($query) use($lang_code) {
            $query->where('lang_code', $lang_code);
        }])
        ->where('is_agent',1)
        ->take(6)
        ->get();

        $testimonials = testimonial::with(['translate_testimonial_lang' => function ($query) use($lang_code) {
            $query->where('lang_code', $lang_code);
        }])
        ->where('status','active')
        ->take(6)
        ->get();

        $properties = Listing::has('property')->where('status','active')->get();
        $numberOfProperty = $properties->count();
        $numberOfSellProperties = Listing::has('property')->where('purpose','sale')->where('status','active')->count();
        $numberOfAgents = User::where('is_agent',1)->where('status','active')->count();


        return response()->json([
            'categories' => $categories,
            'featureProperties' => $featureProperties,
            'newandTrendingProperties' => $newandTrendingProperties,
            'agents' => $agents,
            'testimonials' => $testimonials,
            'numberOfProperty' => $numberOfProperty,
            'numberOfSellProperties' => $numberOfSellProperties,
            'numberOfAgents' => $numberOfAgents
            ]);
    }
    public function property(Request $request,$slug)
    {
        $lang_code = Session::get('selected_language');
        $categories = Category::with(['translate_category_lang' => function ($query) use($lang_code){
            $query->where('lang_code', $lang_code);
        }])->get();

        $property = Listing::has('property')->where('slug',$slug)->with('property.property_translate_lang')->whereHas('property.property_translate_lang', function ($query) use($lang_code) {
            $query->where('lang_code','en');
        })->get();   
        return response()->json([
            'property' => $property,
            ]);
    }



    public function privacy(Request $request)
    {
        if($request->has('lang')){
            $language = $request->lang;
            Session::put('front_lang', $language);
        }else{
            Session::put('front_lang', 'en');
        }
       $privacy = terms_and_condition::first();
       $privacy = $privacy->privacy;
       return response()->json([
        'privacy' => $privacy,
       ]);
    }

    public function termsAndCondition(Request $request)
    {
        if($request->has('lang')){
            $language = $request->lang;
            Session::put('front_lang', $language);
        }else{
            Session::put('front_lang', 'en');
        }
       $termsAndCondition = terms_and_condition::first();
       $termsAndCondition = $termsAndCondition->termsandcondition;
       return response()->json([
        'termsAndCondition' => $termsAndCondition,
       ]);
    }
    public function aboutUs(Request $request)
    {
        if($request->has('lang')){
            $language = $request->lang;
            Session::put('front_lang', $language);
        }else{
            Session::put('front_lang', 'en');
        }
        $about_us = about_us::first();
        $listings = Listing::with('property','car')->take(8)->get();
        $teams = Team::orderBy('id','DESC')->get();
        $testimonials = testimonial::where('status','active')->get();
        
        return response()->json([
            'about_us' => $about_us,
            'listings' => $listings,
            'teams' => $teams,
            'testimonials' => $testimonials
        ]);
    }
    public function contactUs(Request $request)
    {
        $contact_us = contact_page::first();
        return  response()->json([
            'contact_us' => $contact_us
        ]);
    }
}
