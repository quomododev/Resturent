<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\order;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = User::where('email_verified',1)
                          ->where('is_approved',1)
                          ->with('GetOrder')
                          ->orderBy('id','DESC')
                          ->paginate(10);
        return view('Admin.Customers',compact('customers'));
    }
    public function CustomerDetails($id)
    {
        $customer = User::where('id',$id)->with('GetOrder')->first();
        $last_order = order::where('user_id',$id)->orderBy('id','DESC')->first();
        $fisrt_order = order::where('user_id',$id)->orderBy('id','ASC')->first();
        $order = order::where('user_id',$id)->get();
        //return $order;
        $total_order_amount = $order->sum('total_amount');
        $no_of_order = count($order);
        if($no_of_order > 0)
        {
            $average_order_value = $total_order_amount/$no_of_order;
        }
        else{
            $average_order_value = 0;
        }
        
        $avg = number_format($average_order_value, 2, '.');
        //return $avg;
        return view('Admin.CustomerDetails',compact('customer','last_order','fisrt_order','avg','total_order_amount','no_of_order'));
    }
    public function PendingCustomer()
    {
        $pending_customer = User::where('email_verified',1)
                                ->where('is_approved',0)
                                ->orderBy('id','ASC')
                                ->get();
        return view('Admin.PendingCustomer',compact('pending_customer'));
    }
    public function ApproveCustomer($id)
    {
        try{
            $approve_user = User::where('id',$id)->update([
                'is_approved' => 1
            ]);
            if($approve_user)
            {
                return response()->json([
                    'status' => 'success',
                    'approve' => 'Approve user'
                ]);
            }
    
            }catch(\Exception $e)
            {
                $message = $e->getMessage();
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
    }
    public function DeleteUserPendingUser($id)
    {
        try{

            $user = User::find($id);
            $delete_user = $user->delete();
            if($delete_user)
            {
                $message = "Delete pending user successfully";
                $notification = array('message'=>$message,'alert-type'=>'success');
                return redirect()->back()->with($notification);
            }
        }catch(\Exception $e)
        {
                $message = $e->getMessage();
                $notification = array('message'=>$message,'alert-type'=>'success');
                return redirect()->back()->with($notification);
        }
    }
}
