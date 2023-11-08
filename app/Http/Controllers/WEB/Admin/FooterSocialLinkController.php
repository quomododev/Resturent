<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_social_link;
use Validator;

class FooterSocialLinkController extends Controller
{

    public function index()
    {
        $social_link =  footer_social_link::orderBy('id','DESC')->paginate(10);
        return view('Admin.SocialLink',compact('social_link'));
    }
    public function create()
    {
        return view('Admin.CreateSocialLink');
    }

    public function store(Request $request)
    {
        try{
            $validate = Validator::make($request->all(),[
                'link' => 'required|string',
                'icon' => 'required|string',
            ]);
    
            if($validate->fails())
            {
                $message = $validate->errors();
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
            $link = new footer_social_link();
            $link->link = $request->link;
            $link->icon = $request->icon;
            $link->save();
    
            $message = "Create Successfully!!";
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }catch(Exception $e){
            $message = $e->getMessage();
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }

    }
    public function edit($id)
    {
        $social_link = footer_social_link::find($id);
        return view('Admin.EditSocialLink',compact('social_link'));
    }

    public function update(Request $request, $id)
    {
        try{
            $validate = Validator::make($request->all(),[
                'link' => 'required|string',
                'icon' => 'required|string',
            ]);
    
            if($validate->fails())
            {
                $message = $validate->errors();
                $notification = array('message' => $message, 'alert-type' => 'error');
                return redirect()->back()->with($notification);
            }
            $link = footer_social_link::find($id);
            $link->link = $request->link;
            $link->icon = $request->icon;
            $link->save();
    
            $message = "Update Successfully!!";
            $notification = array('message' => $message, 'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }catch(Exception $e){
            $message = $e->getMessage();
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }

    }

    public function destroy($id)
    {
        try{
            $link = footer_social_link::find($id);
        $link->delete();

        $message = "Delete Successfully!!";
        $notification = array('message' => $message, 'alert-type' => 'success');
        return redirect()->back()->with($notification);

        }catch(\Exception $e)
        {
            $message = $e->getMessage();
            $notification = array('message' => $message, 'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
    }
}
