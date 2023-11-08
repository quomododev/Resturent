<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use Validator;
use Hash;

class AdminController extends Controller
{

    public function index()
    {
        $admins = admin::where('admin_role', '!=' ,1)
                        ->orderBy('id','DESC')
                        ->get();
        return view('Admin.Admins',compact('admins'));
    }

    public function create()
    {
        return view('Admin.CreateAdmin');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'password' => 'required',
        'status' => 'required'
        ]);

        if($validate->fails())
        {
        $message = $validate->errors();
        $notification = array('message' => $message,'alert-type' => 'error');
        return redirect()->route('admins.index')->with($notification);
        }

        $create_admin = admin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'status' => $request->status
        ]);
        if($create_admin)
        {
        $message = "Admin crteated successfully";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('admins.index')->with($notification);
        }

    }

    public function show($id)
    {
        
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        //dd("Hello");
       try{
        $admin = admin::find($id);
        $delete_admin = $admin->delete();
       
        $message = "Admin delete successfully";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);

       }catch(\Exception $e)
       {
            $message = $e->getMessage();
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
       }
    }
    public function Status($id)
    {
        try{

            $update_status = 1;
            $admin = admin::find($id);
            if($admin->status == 1)
            {
                $update_status = 0;
            }else{
                $update_status = 1;
            }
            $status = $admin->update([
                'status' => $update_status
            ]);
            return response()->json([
                'status' => '200',
                'update' => 'success'
            ]);
            
    
            }catch(\Exception $e)
            {
                $message = $e->getMessage();
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
    }
}
