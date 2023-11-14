<?php

namespace App\Http\Controllers\WEB\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use PayPal\Api\Amount;
use App\Helpers\MailHelper;
use App\Models\EmailTemplate;
use App\Mail\OrderSuccessfully;
use App\Models\setting;
use PayPal\Api\Details;
use PayPal\Api\Item;

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use App\Models\purches_plan;
use App\Models\razorpay_payment as RazorpayPayment;
use App\Models\InstamojoPayment;
use App\Models\stripe_payment;
use App\Models\PaystackAndMollie;
use App\Models\pricing_plan as PricingPlan;
use App\Models\paypal_payment as PaypalPayment;

Use Stripe;
use Redirect;
use Mail;
use Auth;
use Session;
use URL;
use Notification;
use Razorpay\Api\Api;

use Mollie\Laravel\Facades\Mollie;

class PaymentController extends Controller
{
    private $apiContext;
    // shihab
    public function __construct()
    {
        $account = PaypalPayment::first();
        $paypal_conf = \Config::get('paypal');
        $this->apiContext = new ApiContext(new OAuthTokenCredential(
            $account->client_id,
            $account->secret_id,
            )
        );

        $setting=array(
            'mode' => $account->account_mode,
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => true,
            'log.FileName' => storage_path() . '/logs/paypal.log',
            'log.LogLevel' => 'ERROR'
        );
        $this->apiContext->setConfig($setting);
    }


    public function payWithPaypal(){
        // if(env('APP_MODE') == 'DEMO'){
        //     $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
        //     $notification=array('messege'=>$notification,'alert-type'=>'error');
        //     return redirect()->back()->with($notification);
        // }

        //$pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();

        //$user = Auth::guard('web')->user();

        $paypalSetting = PaypalPayment::first();
        $payableAmount = round(100);

        $name = env('APP_NAME');

        // set payer
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        // set amount total
        $amount = new Amount();
        $amount->setCurrency($paypalSetting->currency_code)
            ->setTotal($payableAmount);

        // transaction
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setDescription(env('APP_NAME'));

        // redirect url
        $redirectUrls = new RedirectUrls();

        $root_url=url('/');
        $redirectUrls->setReturnUrl(route('paypal-payment-success'))
            ->setCancelUrl(route('paypal-payment-cancled'));

        // payment
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
        try {
            $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $ex) {

            $notification = trans('user_validation.Payment Faild');
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('checkout')->with($notification);
        }

        // get paymentlink
        $approvalUrl = $payment->getApprovalLink();

        //Session::put('pricing_plan', $pricing_plan);

        return redirect($approvalUrl);
    }

    public function paypalPaymentSuccess(Request $request){

        //$pricing_plan = Session::get('pricing_plan');

        if (empty($request->get('PayerID')) || empty($request->get('token'))) {
            $notification = 'Payment Faild';
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('checkout')->with($notification);
        }

        $payment_id=$request->get('paymentId');
        $payment = Payment::get($payment_id, $this->apiContext);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() == 'approved') {

            $user = Auth::guard('web')->user();

            $order = $this->createOrder($user, $pricing_plan, 'Paypal', 'success', $payment_id);

            $this->sendMailToClient($user, $order);

            $notification = trans('user_validation.You have successfully enrolled this package');
            $notification = array('messege'=>$notification,'alert-type'=>'success');
            return redirect()->route('user.dashboard')->with($notification);

        }else{
            $notification = trans('user_validation.Payment Faild');
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('checkout')->with($notification);
        }
    }

    public function paypalPaymentCancled(){

        $pricing_plan = Session::get('pricing_plan');

        $notification = trans('user_validation.Payment Faild');
        $notification = array('messege'=>$notification,'alert-type'=>'error');
        return redirect()->route('payment', $pricing_plan->plan_slug)->with($notification);
    }
    
    public function createOrder($user, $pricing_plan, $payment_method, $payment_status, $tnx_info,$phone){

        if($pricing_plan->plan_type == 'monthly'){
            $expiration_date = date('Y-m-d', strtotime('30 days'));
        }elseif($pricing_plan->plan_type == 'yearly'){
            $expiration_date = date('Y-m-d', strtotime('365 days'));
        }

        if($payment_status == 'success'){
            purches_plan::where('user_id', $user->id)->update(['purches_status' => 'expired']);
        }

        $order = new purches_plan();
        $order->purches_id = substr(rand(0,time()),0,10);
        $order->user_id = $user->id;
        $order->plan_id = $pricing_plan->id;
        $order->plan_type = $pricing_plan->plan_type;
        $order->amount = $pricing_plan->plan_price;
        $order->plan_name = $pricing_plan->plan_name;
        $order->phone = $phone;
        if($payment_status == 'success'){
            $order->purches_status = 'active';
        }else{
            $order->purches_status = 'pending';
        }
        $order->payment_status = $payment_status;
        $order->transection_id = $tnx_info;
        $order->payment_method = $payment_method;
        $order->expiration_date = $expiration_date;
        $order->save();
        return $order;
    }
    

    public function sendMailToClient($user, $order){
        MailHelper::setMailConfig();

        $setting = setting::first();

        $template=EmailTemplate::where('id',6)->first();
        $subject=$template->subject;
        $message=$template->description;
        $message = str_replace('{{user_name}}',$user->name,$message);
        $message = str_replace('{{total_amount}}',$setting->currency_icon.$order->plan_price,$message);
        $message = str_replace('{{payment_method}}',$order->payment_method,$message);
        $message = str_replace('{{payment_status}}',$order->payment_status,$message);
        Mail::to($user->email)->send(new OrderSuccessfully($message,$subject));
    }
   
    public function payment($slug)
    {
        $setting = Setting::first();

        $user = Auth::guard('web')->user();

        $user = User::select('id','name','email','image','phone','address','status','about_me','facebook','twitter','linkedin','instagram','designation')->where('id', $user->id)->first();

        // mobile app
        $app_visibility = false;
        $homepage = Homepage::first();
        if($homepage->show_mobile_app == 'enable') $app_visibility = true;
        $mobile_app = (object) array(
            'visibility' => $app_visibility,
            'app_bg' => $setting->app_bg,
            'full_title' => $setting->app_full_title,
            'description' => $setting->app_description,
            'play_store' => $setting->google_playstore_link,
            'app_store' => $setting->app_store_link,
            'image' => $setting->app_image,
            'apple_btn_text1' => $setting->apple_btn_text1,
            'apple_btn_text2' => $setting->apple_btn_text2,
            'google_btn_text1' => $setting->google_btn_text1,
            'google_btn_text2' => $setting->google_btn_text2,
        );
        // mobile app

        $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();

        if($pricing_plan->expired_time == 'monthly'){
            $plan_expired_date = date('Y-m-d', strtotime('30 days'));
        }elseif($pricing_plan->expired_time == 'yearly'){
            $plan_expired_date = date('Y-m-d', strtotime('365 days'));
        }elseif($pricing_plan->expired_time == 'lifetime'){
            $plan_expired_date = 'lifetime';
        }

        $bankPayment = BankPayment::select('id','status','account_info','image')->first();
        $stripe = StripePayment::first();
        $paypal = PaypalPayment::first();
        $razorpay = RazorpayPayment::first();
        $flutterwave = Flutterwave::first();
        $mollie = PaystackAndMollie::first();
        $paystack = $mollie;
        $instamojoPayment = InstamojoPayment::first();

        return view('payment')->with([
            'user' => $user,
            'mobile_app' => $mobile_app,
            'pricing_plan' => $pricing_plan,
            'plan_expired_date' => $plan_expired_date,
            'bankPayment' => $bankPayment,
            'stripe' => $stripe,
            'paypal' => $paypal,
            'razorpay' => $razorpay,
            'flutterwave' => $flutterwave,
            'mollie' => $mollie,
            'instamojoPayment' => $instamojoPayment,
            'paystack' => $paystack,
        ]);
    }

    public function bankPayment(Request $request){

        // if(env('APP_MODE') == 'DEMO'){
        //     $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
        //     $notification=array('messege'=>$notification,'alert-type'=>'error');
        //     return redirect()->back()->with($notification);
        // }

        $rules = [
            'tnx_info'=>'required',
        ];
        $customMessages = [
            'tnx_info.required' => trans('user_validation.Transaction is required'),
        ];
        $this->validate($request, $rules,$customMessages);

        //$pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
        $user = Auth::guard('web')->user();
        //$order = $this->createOrder($user, $pricing_plan, 'Bank payment', 'pending', $request->tnx_info);
        $this->sendMailToClient($user, $order);

        $notification = 'Your order has been placed. please wait for admin payment approval';
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('user.dashboard')->with($notification);
    }

    public function payWithStripe(Request $request){

        // if(env('APP_MODE') == 'DEMO'){
        //     $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
        //     $notification=array('messege'=>$notification,'alert-type'=>'error');
        //     return redirect()->back()->with($notification);
        // }

        //$pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();

        //$user = Auth::guard('web')->user();
        
        $stripe = stripe_payment::first();
        $payableAmount = round(100 * $stripe->currency_rate,2);
        Stripe\Stripe::setApiKey($stripe->stripe_secret);

        $result = Stripe\Charge::create ([
                "amount" => $payableAmount * 100,
                "currency" => $stripe->currency_code,
                "source" => $request->stripeToken,
                "description" => env('APP_NAME')
            ]);

        //$order = $this->createOrder($user, $pricing_plan, 'Stripe', 'success', $result->balance_transaction);

        //$this->sendMailToClient($user, $order);

        $notification = 'You have successfully enrolled this package';
        $notification = array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);

    }

    public function payWithRazorpay(Request $request){
        if(env('APP_MODE') == 'DEMO'){
            $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }

        $razorpay = RazorpayPayment::first();
        $input = $request->all();
        $api = new Api($razorpay->key,$razorpay->secret_key);
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));
                $payId = $response->id;

                $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();

                $user = Auth::guard('web')->user();
                $order = $this->createOrder($user, $pricing_plan, 'Razorpay', 'success', $payId);

                $this->sendMailToClient($user, $order);

                $notification = trans('user_validation.You have successfully enrolled this package');
                $notification = array('messege'=>$notification,'alert-type'=>'success');
                return redirect()->route('user.dashboard')->with($notification);

            }catch (Exception $e) {
                $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
                $notification = trans('user_validation.Payment Faild');
                $notification = array('messege'=>$notification,'alert-type'=>'error');
                return redirect()->route('payment', $pricing_plan->plan_slug)->with($notification);
            }
        }else{
            $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
            $notification = trans('user_validation.Payment Faild');
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('payment', $pricing_plan->plan_slug)->with($notification);
        }
    }

    public function payWithFlutterwave(Request $request, $slug)
     {
        $flutterwave = Flutterwave::first();
        $curl = curl_init();
        $tnx_id = $request->tnx_id;
        $url = "https://api.flutterwave.com/v3/transactions/$tnx_id/verify";
        $token = $flutterwave->secret_key;
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer $token"
        ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        if($response->status == 'success'){

            $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
            $user = Auth::guard('web')->user();
            $order = $this->createOrder($user, $pricing_plan, 'Flutterwave', 'success', $tnx_id);
            $this->sendMailToClient($user, $order);

            $notification = trans('user_validation.You have successfully enrolled this package');
            return response()->json(['status' => 'success' , 'message' => $notification]);
        }else{
            $notification = trans('user_validation.Payment Faild');
            return response()->json(['status' => 'faild' , 'message' => $notification]);
        }
    }

    public function payWithMollie(Request $request){

        if(env('APP_MODE') == 'DEMO'){
            $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }

        // $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
        // $user = Auth::guard('web')->user();

        $mollie = PaystackAndMollie::first();
        $price = 100 * $mollie->mollie_currency_rate;
        $price = round($price,2);
        $price = sprintf('%0.2f', $price);

        $mollie_api_key = $mollie->mollie_key;
        $currency = strtoupper($mollie->mollie_currency_code);
        Mollie::api()->setApiKey($mollie_api_key);
        $payment = Mollie::api()->payments()->create([
            'amount' => [
                'currency' => $currency,
                'value' => ''.$price.'',
            ],
            'description' => env('APP_NAME'),
            'redirectUrl' => route('mollie-payment-success'),
        ]);

        $payment = Mollie::api()->payments()->get($payment->id);
        // session()->put('payment_id',$payment->id);
        // session()->put('pricing_plan',$pricing_plan);
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function molliePaymentSuccess(Request $request){
        $pricing_plan = Session::get('pricing_plan');
        $mollie = PaystackAndMollie::first();
        $mollie_api_key = $mollie->mollie_key;
        Mollie::api()->setApiKey($mollie_api_key);
        $payment = Mollie::api()->payments->get(session()->get('payment_id'));
        if ($payment->isPaid()){
            $user = Auth::guard('web')->user();
            $order = $this->createOrder($user, $pricing_plan, 'Mollie', 'success', session()->get('payment_id'));
            $this->sendMailToClient($user, $order);

            $notification = trans('user_validation.You have successfully enrolled this package');
            $notification = array('messege'=>$notification,'alert-type'=>'success');
            return redirect()->route('user.dashboard')->with($notification);
        }else{
            $notification = trans('user_validation.Payment Faild');
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('payment', $pricing_plan->plan_slug)->with($notification);
        }
    }

    public function payWithPayStack(Request $request, $slug){

        if(env('APP_MODE') == 'DEMO'){
            $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
            $notification=array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }

        $paystack = PaystackAndMollie::first();

        $reference = $request->reference;
        $transaction = $request->tnx_id;
        $secret_key = $paystack->paystack_secret_key;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST =>0,
            CURLOPT_SSL_VERIFYPEER =>0,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer $secret_key",
                "Cache-Control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $final_data = json_decode($response);
        if($final_data->status == true) {
            $pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
            $user = Auth::guard('web')->user();
            $order = $this->createOrder($user, $pricing_plan, 'Paystack', 'success', $transaction);
            $this->sendMailToClient($user, $order);

            $notification = trans('user_validation.You have successfully enrolled this package');
            return response()->json(['status' => 'success' , 'message' => $notification]);
        }else{
            $notification = trans('user_validation.Payment Faild');
            return response()->json(['status' => 'faild' , 'message' => $notification]);
        }
    }
    public function payWithInstamojo(){

        // if(env('APP_MODE') == 'DEMO'){
        //     $notification = trans('user_validation.This Is Demo Version. You Can Not Change Anything');
        //     $notification=array('messege'=>$notification,'alert-type'=>'error');
        //     return redirect()->back()->with($notification);
        // }

        //$pricing_plan = PricingPlan::where(['plan_slug' => $slug])->first();
        //$user = Auth::guard('web')->user();

        $instamojoPayment = InstamojoPayment::first();
        $price = 100 * $instamojoPayment->currency_rate;
        $price = round($price,2);

        $environment = $instamojoPayment->account_mode;
        $api_key = $instamojoPayment->api_key;
        $auth_token = $instamojoPayment->auth_token;

        if($environment == 'Sandbox') {
            $url = 'https://test.instamojo.com/api/1.1/';
        } else {
            $url = 'https://www.instamojo.com/api/1.1/';
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url.'payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$api_key",
                "X-Auth-Token:$auth_token"));
        $payload = Array(
            'purpose' => env("APP_NAME"),
            'amount' => $price,
            'phone' => '918160651749',
            'buyer_name' => 'Shihab',
            'redirect_url' => route('response-instamojo'),
            'send_email' => true,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => 'shihab@gmaiul.com',
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        //Session::put('pricing_plan', $pricing_plan);
        return redirect($response->payment_request->longurl);
    }

    public function instamojoResponse(Request $request){

        $pricing_plan = Session::get('pricing_plan');

        $input = $request->all();
        $instamojoPayment = InstamojoPayment::first();
        $environment = $instamojoPayment->account_mode;
        $api_key = $instamojoPayment->api_key;
        $auth_token = $instamojoPayment->auth_token;

        if($environment == 'Sandbox') {
            $url = 'https://test.instamojo.com/api/1.1/';
        } else {
            $url = 'https://www.instamojo.com/api/1.1/';
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url.'payments/'.$request->get('payment_id'));
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:$api_key",
                "X-Auth-Token:$auth_token"));
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);

        if ($err) {
            $notification = trans('user_validation.Payment Faild');
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('payment', $pricing_plan->plan_slug)->with($notification);
        } else {
            $data = json_decode($response);
        }

        if($data->success == true) {
            if($data->payment->status == 'Credit') {

                $user = Auth::guard('web')->user();
                $order = $this->createOrder($user, $pricing_plan, 'Instamojo', 'success', $request->get('payment_id'));

                $this->sendMailToClient($user, $order);

                $notification = trans('user_validation.You have successfully enrolled this package');
                $notification = array('messege'=>$notification,'alert-type'=>'success');
                return redirect()->route('user.dashboard')->with($notification);

            }
        }else{
            $notification = trans('user_validation.Payment Faild');
            $notification = array('messege'=>$notification,'alert-type'=>'error');
            return redirect()->route('payment', $pricing_plan->plan_slug)->with($notification);
        }
    }
    
}
