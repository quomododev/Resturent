<?php

namespace App\Http\Controllers\WEB\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MobileApp;
use App\Models\setting;
use App\Models\User;
use App\Models\addresse;
use App\Models\country;
use App\Models\State;
use App\Models\city;
use App\Models\product;
use App\Models\Review;
use App\Models\Order;
use App\Models\LangMessage;
use App\Models\OrderItem;
use Carbon\Carbon;
use Image;
use Str;
use File;
Use Hash;
use Validator;
use Auth;
use Session;

class DashboardController extends Controller
{
    public function UserDashboard(){
        $data['totalOrder'] = Order::where('user_id',auth::user()->id)->count();
        $data['totalOrderNew'] = Order::where('user_id',auth::user()->id)->where('order_status',1)->count();
        $data['totalOrderComplte'] = Order::where('user_id',auth::user()->id)->where('order_status',3)->count();
        $data['address'] = addresse::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->limit(2)->get();
        return view('Fontend.User.dashboard',$data);
    }

    public function UserProfile(){
        $data['countries'] = country::all();
        $data['states'] = State::all();
        $data['cities'] = city::all();
        $data['user'] = User::where('id',Auth::user()->id)->first();
        return view('Fontend.User.edit_profile',$data);
    }

    public function address(){
        $data['LangMessage'] =  LangMessage::first();
        $data['countries'] = country::all();
        $data['address'] = addresse::where('user_id', Auth::user()->id)->orderBy('id', 'asc')->get();
        return view('Fontend.User.address',$data);
    }

    public function addressEdit($id){
        $data['countries'] = country::all();
        $data['states'] = State::all();
        $data['cities'] = city::all();
        $data['address'] = addresse::find($id);
        return view('Fontend.User.address-edit',$data);
    }

    public function addressUpdate(Request $request, $id){
        $rules = [
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'address'=>'required',
        ];
        $customMessages = [
            'name.required' => 'Name is required',
            'phone.required' => 'Phone Number is required',
            'email.required' => 'Email is required',
            'country_id.required' => 'Country is required',
            'state_id.required' => 'State is required',
            'city_id.required' => 'City is required',
            'address.required' => 'Address is required',
        ];
        $this->validate($request, $rules,$customMessages);

        $address = addresse::find($id);
        $address->name = $request->name;
        $address->phone = $request->phone;
        $address->email = $request->email;
        $address->country_id = $request->country_id;
        $address->state_id = $request->state_id;
        $address->city_id = $request->city_id;
        $address->address = $request->address;
        $address->save();
        $message = "Address Updated Successfully";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('user.address')->with($notification);
    }

    public function order(){
        $data = Order::paginate(10);
        $setting =  setting::first();
        $order = Order::where('user_id',auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('Fontend.User.order',compact('data','setting','order'));
    }

    public function orderWeekly(){
        $data['data'] = Order::paginate(10);
        $data['setting'] =  setting::first();
        $data['order'] = Order::where('user_id', auth()->user()->id)
        ->whereBetween('created_at', [Carbon::now()->subDays(10), Carbon::now()])
        ->orderBy('id','DESC')
        ->paginate(10);
        return view('Fontend.User.order',$data);
    }

    public function orderDetils($id){
        $data['setting'] =  setting::first();
        $data['order'] = Order::find($id);
        $data['OrderItem'] = OrderItem::where('order_id',$id)->get();
        return view('Fontend.User.order_detils',$data);
    }

    public function wishlist(){
        $wishlist = session('wishlist', []);
        $data['product'] = product::where('status', 'active')->whereIn('id', $wishlist)->get();
        return view('Fontend.User.wishlist',$data);
    }

    public function review(){
        $data['reviews'] = Review::with('Product')->where('status',1)->where('user_id', Auth::user()->id)->orderBy('id','DESC')->get();
        return view('Fontend.User.reviews',$data);
    }

    public function changePassword(){
        return view('Fontend.User.change_password');
    }




    public function getStates(Request $request)
    {
        $states = State::where('country_id', $request->country_id)->get();
        return response()->json($states);
    }

    public function getCities(Request $request)
    {
        $cities = city::where('state_id', $request->state_id)->get();
        return response()->json($cities);
    }

    public function UpdateProfile(Request $request, $id)
    {
        $user = user::find($id);
        $old_image = $user->image;
        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug('user-images').date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->image)
                ->save(public_path().'/'.$image_name);
            if($old_image){
                if(File::exists(public_path().'/'.$old_image))unlink(public_path().'/'.$old_image);
            }
        }else{
            $image_name = $user->image;
        }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->address = $request->address;
        $user->image = $image_name;
        $user->save();
        $message = "Profile Updated Successfully";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function ChnagePassword(Request $request)
    {
            $validate = Validator::make($request->all(),[
                'old_password' => 'required',
                'password' => 'required|confirmed',
            ]);
           
            $user = Auth::user();
            if(Hash::check($request->old_password ,$user->password))
            {
                $update = $user->update([
                    'password' => Hash::make($request->password)
            ]);
                if($update)
                {
                    $message = "Password updated successfully";
                    $notification = array('message' => $message, 'alert-type' => 'success');
                    return redirect()->back()->with($notification);
                }
            }
            else{
                $message = "Your old password doesn't match";
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
    }

    public function addNewAddress(Request $request)
    {
        $rules = [
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'address'=>'required',
        ];
        $customMessages = [
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',
            'phone.required' => 'Phone Number is required',
            'email.required' => 'Email is required',
            'country_id.required' => 'Country is required',
            'state_id.required' => 'State is required',
            'city_id.required' => 'City is required',
            'address.required' => 'Address is required',
        ];
        $this->validate($request, $rules,$customMessages);

        $address = new addresse();
        $address->user_id = auth::user()->id;
        $address->name = $request->fname . ' ' . $request->lname;
        $address->phone = $request->phone;
        $address->email = $request->email;
        $address->country_id = $request->country_id;
        $address->state_id = $request->state_id;
        $address->city_id = $request->city_id;
        $address->address = $request->address;
        $address->save();
        $message = "Address Added Successfully";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function removeAddress($id)
    {
        $address = addresse::find($id);
        if($address->user_id == auth::user()->id){
            $address->delete();
            $message = "Delete Successfully";
            $notification = array('message'=> $message,'alert-type'=> 'success');
            return redirect()->back()->with($notification);
        }else{
            $message = "Somthing Went To Wrong!";
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
       
    }



}
