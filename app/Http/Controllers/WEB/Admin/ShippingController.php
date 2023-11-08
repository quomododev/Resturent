<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\City;

class ShippingController extends Controller
{
    public function index(){
        $shippings = Shipping::orderBy('id','asc')->get();
        return view('admin.shipping_method', compact('shippings'));
    }

    public function create(){
        $cities = City::where('status',1)->orderBy('name','asc')->get();
        return view('Admin.CreateCountry', compact('cities'));
    }

    public function store(Request $request){
        $rules = [
            'city_id' => 'required',
            'shipping_rule' => 'required',
            'type' => 'required',
            'shipping_fee' => 'required|numeric',
            'condition_from' => 'required|numeric',
            'condition_to' => 'required|numeric',
        ];
        $customMessages = [
            'city_id.required' => "City is required",
            'shipping_rule.required' => "Shipping rule is required",
            'type.required' => "Type is required",
            'shipping_fee.required' => "Shipping fee is required",
            'condition_from.required' => "Condition from is required",
            'condition_to.required' => "Condition to is required",
        ];
        $this->validate($request, $rules,$customMessages);

        $shipping = new Shipping();
        $shipping->city_id = $request->city_id;
        $shipping->shipping_rule = $request->shipping_rule;
        $shipping->type = $request->type;
        $shipping->shipping_fee = $request->shipping_fee;
        $shipping->condition_from = $request->condition_from;
        $shipping->condition_to = $request->condition_to;
        $shipping->save();

        $notification="Created Successfully";
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.shipping.index')->with($notification);
    }


    public function edit($id){
        $shipping = Shipping::find($id);
        return view('admin.edit_shipping', compact('shipping'));
    }

    public function update(Request $request, $id){

        $rules = [
            'shipping_rule' => 'required',
            'type' => 'required',
            'shipping_fee' => 'required|numeric',
            'condition_from' => 'required|numeric',
            'condition_to' => 'required|numeric',
        ];
        $customMessages = [
            'shipping_rule.required' => "Shipping rule is required",
            'type.required' => "Type is required",
            'shipping_fee.required' => "Shipping fee is required",
            'condition_from.required' => "Condition from is required",
            'condition_to.required' => "Condition to is required",
        ];
        $this->validate($request, $rules,$customMessages);

        $shipping = Shipping::find($id);
        $shipping->shipping_rule = $request->shipping_rule;
        $shipping->type = $request->type;
        $shipping->shipping_fee = $request->shipping_fee;
        $shipping->condition_from = $request->condition_from;
        $shipping->condition_to = $request->condition_to;
        $shipping->save();

        $notification="Update Successfully";
        $notification=array('messege'=>$notification,'alert-type'=>'success');
        return redirect()->route('admin.shipping.index')->with($notification);

    }

    public function delete($id)
    {
       try{
        $Shipping = Shipping::find($id);
        $delete_Shipping = $Shipping->delete();
        $message = "Shipping deleted successfully";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
       }catch(\Exception $e)
       {
            $message = $e->getMessage();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
       }
    }

    public function Status($id)
    {
        $update_status = 'active';
        $shipping = Shipping::find($id);
        if($shipping->status == 'active')
        {
            $update_status = 'inactive';
        }else{
            $update_status = 'active';
        }
        $shipping->update([
            'status' => $update_status
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Statuss Updated',
        ]);   
    }
}
