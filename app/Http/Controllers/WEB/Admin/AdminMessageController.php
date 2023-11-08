<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact_message;
use App\Models\User;
class AdminMessageController extends Controller
{
    public function index()
    {
        $message = contact_message::all();
        return view('Admin.Message',compact('message'));
    }
    public function deleteMessage($id)
    {



        
        $message = contact_message::find($id);
        $message->delete();

        $message = "Successfully Deleted!!";
        $notification = array('message' => $message,'alert' => 'success');
        return redirect()->back()->with($notification);
    }
}
