<?php

namespace App\Http\Controllers\WEB\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\password_reset;
use Carbon\Carbon;
Use Hash;
use Validator;
use Auth;
use Session;
use Str;
use URL;
use Mail;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('Fontend.Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('user.dashboard');
        }

        return redirect('login')->withError('Login details are not Valid!');
    }

    public function registerView()
    {
        return view('Fontend.Auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('user.dashboard');
        }

        return redirect('register')->withError('Error');
    }

    public function LogOut(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }

    public function Forgot()
    {
        return view('Fontend.Auth.reset');
    }

    public function ForgotPassword(Request $request)
    {
        
            $user = user::where('email',$request->email)->get();
            if(count($user) > 0)
            {
                $token = Str::random(50);
                $domain = URL::to('/');
                $url = $domain.'/reset/password?token='.$token;

                $data['url'] = $url;
                $data['email'] = $request->email;
                $data['title'] = "Reset Password";
                $data['body'] = "Plese click here too reset your password";
                
                
                $sendEmail = Mail::send('Fontend.Auth.SendEmail',['data'=>$data],function($message) use ($data){
                    $message->to($data['email'])->subject($data['title']);
                });
               

                $dateTime = Carbon::now()->format('Y-m-d H:i:s');
                $setToken = password_reset::updateOrCreate(
                    ['email' => $request->email],
                    [
                        'email' => $request->email,
                        'token' => $token,
                        'created_at' => $dateTime
                    ]
                );
                return $url;
                $message = "Please cheack your email & change password";
                $notification = array('message' => $message,'alert-type' => 'success');
                return redirect()->back()->with($notification);

            }else{
                $message = "Email not found";
                $notification = array('message'=> $message,'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }   
    }

    public function ResetPassword(Request $request)
    {
        $token = $request->token;
        $email = password_reset::where('token',$request->token)->get();
        if(isset($request->token) && count($email)>0)
        {
            $user = user::where('email',$email[0]['email'])->get();
            return view('Fontend.Auth.reset_password',compact('user'));
        }
        else{
            echo "somthing went to wrong!";
        }
        
    }

    public function SetPassword(Request $request)
    {
        //dd($request->all());
        $validate = Validator::make($request->all(),[
            'password' => 'required|confirmed'
        ]);
        if($validate->fails())
        {
            $message = $validate->errors();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
        $admin = user::find($request->id);
        //return $admin;
        $update = $admin->update([
            'password' => Hash::make($request->password)
        ]);
        if($update)
        {
            $message = "Updated your password";
            $notification = array('message'=> $message,'alert-type' => 'success');
            return redirect()->route('login')->with($notification);
        }
    }

    
}
