<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subscriber;

class SubscriberController extends Controller
{

    public function index()
    {
        $subscribers =  subscriber::orderBy('id','DESC')->paginate(10);
        return view('Admin.Subscriber',compact('subscribers'));
    }

    public function deleteSubscriber($id)
    {
        $message = subscriber::find($id);
        $message->delete();

        $message = "Successfully Deleted!!";
        $notification = array('message' => $message,'alert' => 'success');
        return redirect()->back()->with($notification);
    }

    public function ChangeStatus($id)
    {
       try{
        $update_status = 'active';
        $faq = subscriber::find($id);
        if($faq->status == 'active')
        {
            $update_status = 'inactive';

        }else{
            $update_status = 'active';
        }
        $faq->update([
            'status' => $update_status
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'update successfully'
        ]);
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => 500,
                'message' => $e->getMessage()
            ]);
        }
    }

}
