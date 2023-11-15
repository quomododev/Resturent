<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\setting;
use Auth;

class OrderController extends Controller
{
    public function allOrder(){
        $data['setting'] =  setting::first();
        $data['order'] = Order::with('userName')->paginate(10);
        // return $data['order'];
        return view('Admin.pages.order.all_order',$data);
    }

    public function deliveryOrder(){
        return view('Admin.pages.order.delivery_order');
    }

    public function pickupOrder(){
        return view('Admin.pages.order.pickup_order');
    }

    public function inresturentOrder(){
        return view('Admin.pages.order.inresturent_order');
    }

    public function OrderDetils($id){
        return view('Admin.pages.order.order_detils');
    }

    public function OrderDelete($id)
    {
        try{
            OrderItem::where('order_id',$id)->delete();
            Order::where('id',$id)->delete();
            
            $message = "Delete successfully";
            $notification = array('message'=>$message,'alert-type'=>'success');
            return redirect()->back()->with($notification);

        }catch(\Exception $e)
        {
            $message = $e->getMessage();
            $notification = array('message'=>$message,'alert-type'=>'success');
            return redirect()->back()->with($notification);
        }
    }

}
