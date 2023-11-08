<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\setting;
use Image;
use Str;
use File;

class EmptyImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting =  setting::first();
        //return $setting;
        return view('Admin.EmptyImage',compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $setting = setting::find($id);
            $old_empty_cart_image = $setting->empty_cart;
            $old_error_page = $setting->error_page;

            if($request->empty_cart){
                $extention = $request->empty_cart->getClientOriginalExtension();
                $image_name = Str::slug('emptyCart').date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
                $empty_cart = 'uploads/website-images/'.$image_name;
                Image::make($request->empty_cart)
                    ->save(public_path().'/'.$empty_cart);
    
                if($old_empty_cart_image){
                    if(File::exists(public_path().'/'.$old_empty_cart_image))unlink(public_path().'/'.$old_empty_cart_image);
                }    
                
            }else{
               $empty_cart =  $old_empty_cart_image;
            }

           
            if($request->error_page){
                $extention = $request->error_page->getClientOriginalExtension();
                $image_name = Str::slug('error_page').date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
                $error_page = 'uploads/website-images/'.$image_name;
                Image::make($request->error_page)
                    ->save(public_path().'/'.$error_page);
    
                if($old_error_page){
                    if(File::exists(public_path().'/'.$old_error_page))unlink(public_path().'/'.$old_error_page);
                }    
                
            }else{
               $error_page =  $old_error_page;
            }
        
            $update = setting::where('id',$id)->update([
                'empty_cart'=> $empty_cart,
                'error_page'=> $error_page,
            ]);
            if($update)
            {
                
                $messase = "Update successfully";
                $notification = array('message' => $messase,'alert-type'=> 'success');
                return redirect()->back()->with($notification);
            }

        }catch(\Exception $e)
        {
                $messase = $e->getMessage();
                $notification = array('message' => $messase,'alert-type'=> 'success');
                return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
