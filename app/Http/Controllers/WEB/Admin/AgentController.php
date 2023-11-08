<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TranslateUser;
use App\Models\Language;
use App\Models\Agency;

class AgentController extends Controller
{
    public function index()
    {
        $agents = User::with('translate_agent','listing')->where('is_agent',1)->get();
        return view('Admin.Agents',compact('agents'));
    }
    public function create()
    {
        $agencies = Agency::with('agency_translate')->get();
        return view('Admin.CreateAgent',compact('agencies'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'agency_id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|string|email|unique:Users,email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'designation' => 'required|string',
            'status' => 'required|string',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = new User();
        $user->agency_id = $request->agency_id;
        $user->is_agent = 1;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->is_approved = 1;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateUser();
          $translate->user_id = $user->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->designation = $request->designation;
          $translate->address = $request->address;
          $translate->save();
        }
        $message = "Insert Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('agents.index',$user->id)->with($notification);
    }
    public function edit($id)
    {
        $agent = User::with('translate_agent')->find($id);
        return view('Admin.EditAgent',compact('agent'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'agency_id' => 'required|integer',
            'name' => 'required|string',
            'email' => 'required|string|email|unique:Users,email,'.$id,
            'phone' => 'required|string',
            'address' => 'required|string',
            'designation' => 'required|string',
            'status' => 'required|string',
        ]);

        $user = User::find($id);
        $user->agency_id = $request->agency_id;
        $user->is_agent = 1;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->status = $request->status;
        $user->is_approved = 1;
        $user->phone = $request->phone;
        $user->save();

        $translate = TranslateUser::where('user_id',$id)->where('lang_code','en')->first();
        $translate->user_id = $user->id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->designation = $request->designation;
        $translate->address = $request->address;
        $translate->save();
        
        $message = "Update Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->route('agents.index',$user->id)->with($notification);
    }
    public function delete($id)
    {
        $agent =  User::find($id);
        $agent->delete();
        TranslateUser::where('user_id',$id)->delete();

        $message = "Delete   Successfully!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function editLanguage($userId,$langCode)
    {
        $agent =  User::with('translate_agent')->find($userId);
        $translate_agent =  TranslateUser::where('user_id',$userId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditAgent',compact('translate_agent','agent','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            'address' => 'required|string',

        ]);
        $translate = TranslateUser::find($id);
        $translate->user_id = $translate->user_id;
        $translate->lang_code = $translate->lang_code;
        $translate->name = $request->name;
        $translate->designation = $request->designation;
        $translate->address = $request->address;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
