<?php

namespace App\Http\Controllers\WEB\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MobileApp;
use App\Models\setting;
use App\Models\User;
use App\Models\country;
use App\Models\State;
use App\Models\city;
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
        $data['app'] =  MobileApp::first();
        $data['setting'] = setting::first();
        $data['user'] = User::where('id',Auth::user()->id)->first();
        $data['countries'] = country::all();
        $data['states'] = State::all();
        $data['cities'] = city::all();

        return view('Fontend.User.dashboard',$data);
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



}
