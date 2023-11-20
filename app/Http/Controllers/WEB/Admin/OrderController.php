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
        $setting =  setting::first();
        $order = Order::with('userName')->orderBy('id','DESC')->get();

        return view('Admin.pages.order.all_order', compact('order', 'setting'));
    }

    public function deliveryOrder(){
        $data['setting'] =  setting::first();
        $data['order'] = Order::with('userName')->orderBy('id','DESC')->where('type','delivery')->paginate(10);
        return view('Admin.pages.order.delivery_order',$data);
    }

    public function pickupOrder(){
        $data['setting'] =  setting::first();
        $data['order'] = Order::with('userName')->orderBy('id','DESC')->where('type','pickup')->paginate(10);
        return view('Admin.pages.order.pickup_order',$data);
    }

    public function inresturentOrder(){
        $data['setting'] =  setting::first();
        $data['order'] = Order::with('userName')->orderBy('id','DESC')->where('type','inresturent')->paginate(10);
        return view('Admin.pages.order.inresturent_order',$data);
    }

    public function OrderDetils($id){
        $data['setting'] =  setting::first();
        $data['order'] = Order::find($id);
        $data['OrderItem'] = OrderItem::where('order_id',$id)->get();
        return view('Admin.pages.order.order_detils',$data);
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

    public function OrderChange(Request $request, $id)
    {
        $order = Order::find($id);
        $order->payment_status = $request->payment_status;
        $order->order_status = $request->order_status;
        $order->save();
        $message = "successfully Changed";
        $notification = array('message'=>$message,'alert-type'=>'success');
        return redirect()->back()->with($notification);
    }

}
