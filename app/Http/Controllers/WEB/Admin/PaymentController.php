<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\stripe_payment;
use App\Models\flutterwave;
use App\Models\PaystackAndMollie;
use App\Models\razorpay_payment;
use App\Models\InstamojoPayment;
use App\Models\paypal_payment;
use App\Models\razorpay_payment as RazorpayPayment;


class PaymentController extends Controller
{
    public function index()
    {
        $paypal_payment    = paypal_payment::first();
        $stripe_payment    = stripe_payment::first();
        $flutterwave       = flutterwave::first();
        $PaystackAndMollie = PaystackAndMollie::first();
        $razorpay_payment  = razorpay_payment::first();
        $InstamojoPayment  = InstamojoPayment::first();
       // return $InstamojoPayment;
        return view('Admin.Payment', compact('paypal_payment','stripe_payment','flutterwave','PaystackAndMollie','razorpay_payment','InstamojoPayment'));
    }
    public function paypalCredentialUpdate(Request $request)
    {

        //return $request->all();
        // $rules = [
        //     'paypal_client_id' => $request->status ? 'required' : '',
        //     'paypal_secret_key' => $request->status ? 'required' : '',
        //     'account_mode' => $request->status ? 'required' : '',
        //     'country_name' => $request->status ? 'required' : '',
        //     'currency_name' => $request->status ? 'required' : '',
        //     'currency_rate' => $request->status ? 'required|numeric' : '',
        // ];
        // $customMessages = [
        //     'paypal_client_id.required' => trans('admin_validation.Paypal client id is required'),
        //     'paypal_secret_key.required' => trans('admin_validation.Paypal secret key is required'),
        //     'account_mode.required' => trans('admin_validation.Account mode is required'),
        //     'country_name.required' => trans('admin_validation.Country name is required'),
        //     'currency_name.required' => trans('admin_validation.Currency name is required'),
        //     'currency_rate.required' => trans('admin_validation.Currency rate is required'),
        // ];
        // $this->validate($request, $rules,$customMessages);
        $status = 0;
        $paypal = paypal_payment::first();
        $paypal->client_id = $request->paypal_client_id;
        $paypal->secret_id = $request->paypal_secret_key;
        $paypal->account_mode = $request->account_mode;
        $paypal->country_code = $request->country_name;
        $paypal->currency_code = $request->currency_name;
        $paypal->currency_rate = $request->currency_rate;
        if(!empty($request->status))
        {
            $status = 1;
        }
        $paypal->status = $status;
        $paypal->save();

        $notification='Updated Successfully';
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }
    public function StripeCredentialUpdate(Request $request){

        //return $request->all();
        // $rules = [
        //     'stripe_key' => $request->status ? 'required' : '',
        //     'stripe_secret' => $request->status ? 'required' : '',
        //     'country_name' => $request->status ? 'required' : '',
        //     'currency_name' => $request->status ? 'required' : '',
        //     'currency_rate' => $request->status ? 'required|numeric' : '',
        // ];
        // $customMessages = [
        //     'stripe_key.required' => trans('admin_validation.Stripe key is required'),
        //     'stripe_secret.required' => trans('admin_validation.Stripe secret is required'),
        //     'country_name.required' => trans('admin_validation.Country name is required'),
        //     'currency_name.required' => trans('admin_validation.Currency name is required'),
        //     'currency_rate.required' => trans('admin_validation.Currency rate is required'),
        // ];
        // $this->validate($request, $rules,$customMessages);
        $status = 0;
        $stripe = stripe_payment::first();
        $stripe->stripe_key = $request->stripe_key;
        $stripe->stripe_secret = $request->stripe_secret;
        $stripe->country_code = $request->country_name;
        $stripe->currency_code = $request->currency_name;
        $stripe->currency_rate = $request->currency_rate;
        if(!empty($request->status))
        {
            $status = 1;
        }
        $stripe->status = $status;
        $stripe->save();
      
        $notification='admin_validation.Updated Successfully';
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    public function updateRazorpay(Request $request){

        //return $request->all();
        // $rules = [
        //     'razorpay_key' => $request->status ? 'required' : '',
        //     'razorpay_secret' => $request->status ? 'required' : '',
        //     'name' => $request->status ? 'required' : '',
        //     'description' => $request->status ? 'required' : '',
        //     'currency_rate' => $request->status ? 'required' : '',
        //     'theme_color' => $request->status ? 'required' : '',
        //     'currency_name' => $request->status ? 'required' : '',
        //     'country_name' => $request->status ? 'required' : '',
        // ];
        // $customMessages = [
        //     'razorpay_key.required' => trans('admin_validation.Razorpay key is required'),
        //     'razorpay_secret.required' => trans('admin_validation.Razorpay secret is required'),
        //     'name.required' => trans('admin_validation.Name is required'),
        //     'description.required' => trans('admin_validation.Description is required'),
        //     'country_name.required' => trans('admin_validation.Country name is required'),
        //     'currency_name.required' => trans('admin_validation.Currency name is required'),
        //     'currency_rate.required' => trans('admin_validation.Currency rate is required'),
        //     'theme_color.required' => trans('admin_validation.Theme Color is required'),
        // ];
        // $this->validate($request, $rules,$customMessages);
        $status = 0;
        $razorpay = RazorpayPayment::first();
        $razorpay->key = $request->razorpay_key;
        $razorpay->secret_key = $request->razorpay_secret;
        $razorpay->name = $request->name;
        $razorpay->currency_rate = $request->currency_rate;
        $razorpay->description = $request->description;
        $razorpay->color = $request->theme_color;
        $razorpay->country_code = $request->country_name;
        $razorpay->currency_code = $request->currency_name;
        if(!empty($request->status))
        {
            $status = 1;
        }
        $razorpay->status = $status;
        $razorpay->save();

        $notification='admin_validation.Update Successfully';
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

    
    public function updatePaystack(Request $request){
        //return $request->all();
        try{
        //     $rules = [
        //         'paystack_public_key' => $request->status ? 'required' : '',
        //         'paystack_secret_key' => $request->status ? 'required' : '',
        //         'paystack_currency_rate' => $request->status ? 'required|numeric' : '',
        //         'paystack_currency_name' => $request->status ? 'required' : '',
        //         'paystack_country_name' => $request->status ? 'required' : ''
        //     ];
    
        //     $customMessages = [
        //         'paystack_public_key.required' => trans('admin_validation.Paystack public key is required'),
        //         'paystack_secret_key.required' => trans('admin_validation.Paystack secret key is required'),
        //         'paystack_currency_rate.required' => trans('admin_validation.Currency rate is required'),
        //         'paystack_currency_name.required' => trans('admin_validation.Currency name is required'),
        //         'paystack_country_name.required' => trans('admin_validation.Country rate is required'),
        //     ];
        //     $this->validate($request, $rules,$customMessages);
    
            $status = 0;
            $paystact = PaystackAndMollie::first();
            $paystact->paystack_public_key = $request->paystack_public_key;
            $paystact->paystack_secret_key = $request->paystack_secret_key;
            $paystact->paystack_currency_code = $request->currency_name;
            $paystact->paystack_country_code = $request->country_name;
            $paystact->paystack_currency_rate = $request->currency_rate;
            if(!empty($request->status))
            {
                $status = 1;
            }
            $paystact->paystack_status = $status;
            $paystact->save();
    
            $notification='admin_validation.Update Successfully';
            $notification=array('messege'=>$notification,'alert-type'=>'success');
            return redirect()->back()->with($notification);
        }catch(Exception $e)
        {

        }
    }

    public function updateFlattuerwave(Request $request){
        //return $request->all();
        // $rules = [
        //     'public_key' => $request->status ? 'required' : '',
        //     'secret_key' => $request->status ? 'required' : '',
        //     'title' => $request->status ? 'required' : '',
        //     'currency_rate' => $request->status ? 'required|numeric' : '',
        //     'currency_name' => $request->status ? 'required' : '',
        //     'country_name' => $request->status ? 'required' : '',
        // ];
        // $customMessages = [
        //     'title.required' => trans('admin_validation.Title is required'),
        //     'public_key.required' => trans('admin_validation.Public key is required'),
        //     'secret_key.required' => trans('admin_validation.Secret key is required'),
        //     'currency_rate.required' => trans('admin_validation.Currency rate is required'),
        //     'currency_name.required' => trans('admin_validation.Currency name is required'),
        //     'country_name.required' => trans('admin_validation.Country name is required'),
        // ];
        // $this->validate($request, $rules,$customMessages);
        $status = 0;
        $flutterwave = Flutterwave::first();
        $flutterwave->public_key = $request->public_key;
        $flutterwave->secret_key = $request->secret_key;
        $flutterwave->title = $request->title;
        $flutterwave->currency_rate = $request->currency_rate;
        $flutterwave->country_code = $request->country_name;
        $flutterwave->currency_code = $request->currency_name;
        if(!empty($request->status))
        {
            $status = 1;
        }
        $flutterwave->status = $status;
        $flutterwave->save();

        $notification='admin_validation.Update Successfully';
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }


    public function updateInstamojo(Request $request){

        try{
            // $rules = [
            //     'account_mode' => $request->status ? 'required' : '',
            //     'api_key' => $request->status ? 'required' : '',
            //     'auth_token' => $request->status ? 'required' : '',
            //     'currency_rate' => $request->status ? 'required|numeric' : '',
            // ];
            // $customMessages = [
            //     'account_mode.required' => trans('admin_validation.Account mode is required'),
            //     'api_key.required' => trans('admin_validation.Api key is required'),
            //     'currency_rate.required' => trans('admin_validation.Currency rate is required'),
            //     'auth_token.required' => trans('admin_validation.Auth token is required'),
            // ];
            // $this->validate($request, $rules,$customMessages);
            $status = 0;
            $instamojo = InstamojoPayment::first();
            $instamojo->account_mode = $request->account_mode;
            $instamojo->api_key = $request->api_key;
            $instamojo->auth_token = $request->auth_token;
            $instamojo->currency_rate = $request->currency_rate;
            if(!empty($request->status))
            {
                $status = 1;
            }
            $instamojo->status = $status;
            $instamojo->save();
    
            $notification='Update Successfully';
            $notification=array('messege'=>$notification,'alert-type'=>'success');
            return redirect()->back()->with($notification);
        }catch(Exception $e)
        {
            $notification=$e->getMessage();
            $notification=array('messege'=>$notification,'alert-type'=>'success');
            return redirect()->back()->with($notification);
        }
    }

}
