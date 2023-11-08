<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PricingPlan;
use App\Models\TranslatePricingPlan;
use App\Models\Language;
class PricingPlanController extends Controller
{
    public function edit()
    {
        $pricingplan = PricingPlan::with('translate_pricingplan')->first();
        return view('Admin.EditPricingPlan', compact('pricingplan'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'per_listing_credit' => 'required',
            'per_feature_listing_credit' => 'required',
            'minimum_purchase_credit' => 'required',
            'maximum_purchase_credit' => 'required',
            'listing_icon' => 'required',
            'feature_icon' => 'required',
            'header' => 'required|string',
            'sub_header' => 'required|string',
            'Plan_title' => 'required|string',
            'plan_description' => 'required|string',
            'feature_title' => 'required|string',
            'feature_description' => 'required|string',

        ]);
        $pricingPlan = PricingPlan::first();
        $pricingPlan->per_listing_credit = $request->per_listing_credit;
        $pricingPlan->per_feature_listing_credit = $request->per_feature_listing_credit;
        $pricingPlan->minimum_purchase_credit = $request->minimum_purchase_credit;
        $pricingPlan->maximum_purchase_credit = $request->maximum_purchase_credit;
        $pricingPlan->listing_icon = $request->listing_icon;
        $pricingPlan->feature_icon = $request->feature_icon;
        $pricingPlan->save();

        $translate = TranslatePricingPlan::where('pricing_plan_id',$pricingPlan->id)->first();
        $translate->pricing_plan_id = $translate->pricing_plan_id;
        $translate->lang_code = $translate->lang_code;
        $translate->plan_title = $request->Plan_title;
        $translate->plan_description = $request->plan_description;
        $translate->feature_title = $request->feature_title;
        $translate->feature_description = $request->feature_description;
        $translate->header = $request->header;
        $translate->sub_header = $request->sub_header;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function editLanguage($langCode)
    {
        $pricingPlan =  PricingPlan::with('translate_pricingplan')->first();
        $translate_pricingPlan =  TranslatePricingPlan::where('pricing_plan_id',$pricingPlan->id)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditPricingPlan',compact('translate_pricingPlan','pricingPlan','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
       
        $request->validate([
            'header' => 'required|string',
            'sub_header' => 'required|string',
            'Plan_title' => 'required|string',
            'plan_description' => 'required|string',
            'feature_title' => 'required|string',
            'feature_description' => 'required|string',

        ]);
        $translate = TranslatePricingPlan::find($id);
        $translate->pricing_plan_id = $translate->pricing_plan_id;
        $translate->lang_code = $translate->lang_code;
        $translate->plan_title = $request->Plan_title;
        $translate->plan_description = $request->plan_description;
        $translate->feature_title = $request->feature_title;
        $translate->feature_description = $request->feature_description;
        $translate->header = $request->header;
        $translate->sub_header = $request->sub_header;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
