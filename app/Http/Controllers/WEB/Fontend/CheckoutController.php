<?php

namespace App\Http\Controllers\WEB\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\product;
use App\Models\setting;
use App\Models\User;
use App\Models\seo_setting;
use App\Models\TimeSlot;
use App\Models\country;
use App\Models\addresse;
use App\Models\MobileApp;
use App\Models\SectionTitel;
use App\Models\Cart;
use App\Models\CartAddons;
use App\Models\CartItem;
use App\Models\Coupon;
use App\Models\ApplyCoupon;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\razorpay_payment;
use App\Models\paystack;
use App\Models\flutterwave;
use App\Models\stripe_payment;
use App\Models\LangMessage;
use App\Models\Shipping;
use App\Models\contact_page as ContactUs;
use Validator;
use Auth;

class CheckoutController extends Controller
{
    public function delivery(Request $request){
        if(Auth::user()){
            $data['LangMessage'] =  LangMessage::first();
            $data['seo_setting'] =  seo_setting::where('id',12)->first();
            $data['setting'] =  setting::first();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            $data['slots'] = TimeSlot::orderBy('id','asc')->get();
            $data['countries'] = country::all();
            $data['address'] = addresse::with('GetCountry','GetState','GetCity')->where('user_id',Auth::user()->id)->get();
            $data['cart'] = $request->session()->get('cart', []);
            $data['vatCharge'] = $data['setting']->vat_rate;
            $data['deleveryCharge'] = 0;
            $check = ApplyCoupon::with('coupon')->where(['user_id' => auth::user()->id])->first();
            if($check){
                if($check->coupon->offer_type == '%'){
                    $data['discount'] = ($check->coupon->discount / 100);
                }else{
                    $data['discount'] = $check->coupon->discount;
                }
            }else{
                $data['discount'] = 0;
            }
            return view('Fontend.Pages.checkout',$data);
        }else{
            $message = "First You Need To Login";
            $notification = array('message' => $message, 'alert-type' => 'info');
            return redirect()->route('login')->with($notification);
        } 
    }

    public function pickUp(Request $request){
        if(Auth::user()){
            $data['LangMessage'] =  LangMessage::first();
            $data['seo_setting'] =  seo_setting::where('id',12)->first();
            $data['setting'] =  setting::first();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            $data['slots'] = TimeSlot::orderBy('id','asc')->get();
            $data['contact'] = ContactUs::first();
            $data['cart'] = $request->session()->get('cart', []);
            $data['deleveryCharge'] = 0;
            $check = ApplyCoupon::with('coupon')->where(['user_id' => auth::user()->id])->first();
            if($check){
                if($check->coupon->offer_type == '%'){
                    $data['discount'] = ($check->coupon->discount / 100);
                }else{
                    $data['discount'] = $check->coupon->discount;
                }
            }else{
                $data['discount'] = 0;
            }
            return view('Fontend.Pages.pickup',$data);
        }else{
            $message = "First You Need To Login";
            $notification = array('message' => $message, 'alert-type' => 'info');
            return redirect()->route('login')->with($notification);
        } 
    }

    public function inResturent(Request $request){
        if(Auth::user()){
            $data['LangMessage'] =  LangMessage::first();
            $data['seo_setting'] =  seo_setting::where('id',12)->first();
            $data['setting'] =  setting::first();
            $data['app'] =  MobileApp::first();
            $data['section'] =  SectionTitel::first();
            $data['slots'] = TimeSlot::orderBy('id','asc')->get();
            $data['contact'] = ContactUs::first();
            $data['cart'] = $request->session()->get('cart', []);
            $data['deleveryCharge'] = 0;
            $check = ApplyCoupon::with('coupon')->where(['user_id' => auth::user()->id])->first();
            if($check){
                if($check->coupon->offer_type == '%'){
                    $data['discount'] = ($check->coupon->discount / 100);
                }else{
                    $data['discount'] = $check->coupon->discount;
                }
            }else{
                $data['discount'] = 0;
            }
            return view('Fontend.Pages.inresturent',$data);
        }else{
            $message = "First You Need To Login";
            $notification = array('message' => $message, 'alert-type' => 'info');
            return redirect()->route('login')->with($notification);
        } 
    }

    public function applyCoupon(Request $request){
        // $rules = [
        //     'coupon'=>'required',
        // ];
        // $customMessages = [
        //     'coupon.required' => 'Copun Code  is required',
        // ];
        // $this->validate($request, $rules,$customMessages);


        $data['coupon'] = Coupon::where(['code' => $request->coupon, 'status' => 'active'])->first();

        if(!$data['coupon']){
            $notification = 'Invalid Coupon';
            $notification = array('message'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }

        if($data['coupon']->expired_date < date('Y-m-d')){
            $notification = 'Coupon already expired';
            $notification = array('message'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }

        if($data['coupon']->apply_qty >=  $data['coupon']->max_quantity ){
            $notification = 'Sorry! You can not apply this coupon';
            $notification = array('message'=>$notification,'alert-type'=>'error');
            return redirect()->back()->with($notification);
        }

        $check = ApplyCoupon::where(['user_id' => auth::user()->id])->first();
        if($check){
            $cart = ApplyCoupon::find($check->id);
            $cart->copun_id = $data['coupon']->id;
            $cart->save();
        }else{
            $cart = new ApplyCoupon();
            $cart->user_id = auth::user()->id;
            $cart->copun_id = $data['coupon']->id;
            $cart->save();
        }

        $notification = 'Successfully apply this coupon';
        $notification = array('message'=>$notification,'alert-type'=>'success');
        return redirect()->back()->with($notification);

    }



    public function processOrder(Request $request){
        if(Auth::user()){
            
            $rules = [
                'delevery_day'=>'required',
                'delevery_time'=>'required',
            ];
            $customMessages = [
                'delevery_day.required' => 'Delevery Day is required',
                'delevery_time.required' => 'Delevery Time is required',
            ];
            $this->validate($request, $rules,$customMessages);

            if( $request->type = 'delivery'){
                $findAddress = addresse::where('id',$request->address_id)->first();
                if($findAddress){
                    $shipping = Shipping::where('city_id',$findAddress->city_id)->first();
                    if($shipping){
                        $delevery_charge = $shipping->shipping_fee;
                    }else{
                        $delevery_charge = 0;
                    }
                    
                }else{
                    $delevery_charge = 0;
                }
            }else{
                $delevery_charge = 0;
            }
            $check = Cart::where(['user_id' => auth::user()->id])->first();
            if($check){
                $cart = Cart::find($check->id);
                $cart->user_id = auth::user()->id;
                $cart->type = $request->type;
                $cart->number_of_gest = $request->number_of_gest;
                $cart->address_id = $request->address_id;
                $cart->delevery_day = $request->delevery_day;
                $cart->delevery_time_id = $request->delevery_time;
                $cart->discount_amount = $request->discount_amount;
                $cart->delevery_charge = $delevery_charge;
                $cart->vat_charge = $request->vat_charge;
                $cart->total = $request->total;
                $cart->grand_total = $request->grand_total + $delevery_charge;
                $cart->save();
            }else{
                $cart = new Cart();
                $cart->user_id = auth::user()->id;
                $cart->type = $request->type;
                $cart->number_of_gest = $request->number_of_gest;
                $cart->address_id = $request->address_id;
                $cart->delevery_day = $request->delevery_day;
                $cart->delevery_time_id = $request->delevery_time;
                $cart->discount_amount = $request->discount_amount;
                $cart->delevery_charge = $request->delevery_charge;
                $cart->vat_charge = $request->vat_charge;
                $cart->total = $request->total;
                $cart->grand_total = $request->grand_total + $delevery_charge;
                $cart->save();

            }

            return redirect()->route('select.payment.method');

        }else{
            $message = "First You Need To Login";
            $notification = array('message' => $message, 'alert-type' => 'info');
            return redirect()->route('login')->with($notification);
        } 
    }

    public function selectPayment(Request $request){
        $data['LangMessage'] =  LangMessage::first();
        $data['razorpay'] = razorpay_payment::first();
        $data['paystack'] = paystack::first();
        $data['flutterwave'] = flutterwave::first();
        $data['stripe'] = stripe_payment::first();

        $data['seo_setting'] =  seo_setting::where('id',12)->first();
        $data['setting'] =  setting::first();
        $data['app'] =  MobileApp::first();
        $data['section'] =  SectionTitel::first();
        $data['cart_data'] =  Cart::where('user_id',auth::user()->id)->first();
        $data['cart'] = $request->session()->get('cart', []);
        $cart =  Cart::where('user_id',Auth::user()->id)->first();
        $data['order_total'] =  $cart->grand_total;
        return view('Fontend.Pages.select_payment',$data);
    }

    public function checkOut(Request $request){
        $cart_detils = Cart::where(['user_id' => auth::user()->id])->first();
         $cartData = $request->session()->get('cart', []);
    
        $payment_method = "CashOnDelivery";
        $payment_status = "Pending";
    
        $order = new Order();
        $order->user_id = auth::user()->id;
        $order->type = $cart_detils->type;
        $order->number_of_gest = $cart_detils->number_of_gest;
        $order->address_id = $cart_detils->address_id;
        $order->delevery_day = $cart_detils->delevery_day;
        $order->delevery_time_id = $cart_detils->delevery_time_id;
        $order->discount_amount = $cart_detils->discount_amount;
        $order->delevery_charge = $cart_detils->delevery_charge;
        $order->vat_charge = $cart_detils->vat_charge;
        $order->total = $cart_detils->total;
        $order->grand_total = $cart_detils->grand_total;
        $order->payment_method = $payment_method;
        $order->payment_status = $payment_status;
        $order->order_status = 1;
    
        if($order->save()){
            // Save order items
            foreach ($cartData as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'size' => $item['size'],
                    'addons' => $item['addons'],
                    'qty' => $item['qty'],
                    'total' => $item['total'],
                ]);
            }

            Cart::where('user_id', auth()->user()->id)->delete();
            ApplyCoupon::where('user_id', auth()->user()->id)->delete();
            Session::forget('cart');
        }
            
        $message = "Order placed Successfully ";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('index')->with($notification);
    }
    

}
