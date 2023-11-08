<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brand;
use Validator;
use Str;
use Image;

class AdminBrandController extends Controller
{
    public function brandList()
    {
        $brands = brand::paginate(8);
        return view('Admin.BrandList',compact('brands'));
    }
    public function BrandIndex()
    {
        return view('Admin.AddBrand');
    }
    public function BrandCreate(Request $request)
    {
        try{
            $validate = Validator::make($request->all(),[
                'name' => 'required|string',
                'slug' => 'required|string',
                'status' => 'required|integer'
                //'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
            ]);
            if($validate->fails()){
                return redirect()->back()->with('msg',$validate->errors());
            }
            if($request->image){
                $extention = $request->image->getClientOriginalExtension();
                $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
                $image_name = 'uploads/Brand-image/'.$image_name;
                Image::make($request->image)
                    ->save(public_path().'/'.$image_name);
            }else{
                $image_name = " ";
            }
            $create = brand::create([
                'name' => $request->input('name'),
                'slug' => $request->input('slug'),
                'status' => $request->input('status'),
                'image' => $image_name
            ]);
            if($create){
                
                $message = "Create Brand successfully!!";
                $notification = array('message' => $message,'alert-type' => 'success');
                return redirect()->back()->with($notification);
            }
        }catch(\Exception $e)
        {
                $message = $e->getMessage();
                $notification = array('message' => $message,'alert-type' => 'error');
                return redirect()->back()->with($notification);
        }
    }
    public function BrandDelete($id)
    {
       try{
                $delete = brand::where('id',$id)->delete();
        
                $message = "Delete Brand successfully!!";
                $notification = array('message' => $message,'alert-type' => 'success');
                return redirect()->back()->with($notification);
       }catch(\Exception $e)
       {
                $message = $e->getMessage();
                $notification = array('message' => $message,'alert-type' => 'error');
                return redirect()->back()->with($notification);
       }
    }
    public function EditDelete($id)
    {
        $brand = brand::find($id);
        return view('Admin.EditBrand',compact('brand'));
    }
    public function UpdateBrand(Request $request,$id)
    {
        try{

            $validate = Validator::make($request->all(),[
                'name' => 'required|string',
                'slug' => 'required|string',
                'status' => 'required',
            ]);
    
            if($validate->fails())
            {
                return redirect()->back()->with('msg',$validate->errors());
            }
            $brand = brand::find($id);
            $old_image = $brand->image;
            if($request->image){
                $extention = $request->image->getClientOriginalExtension();
                $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
                $image_name = 'uploads/category-images/'.$image_name;
                Image::make($request->image)
                    ->save(public_path().'/'.$image_name);
            }else{
                $image_name = $old_image;
            }
            $update = brand::where('id',$id)->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'image' =>$image_name
            ]);
            if($update){

                $message = "Brand Updated Successfully!!";
                $notification = array('message' => $message,'alert-type' => 'success');
                return redirect()->back()->with($notification);
            }

        }catch(\Exception $e)
        {
                $message = $e->getMessage();
                $notification = array('message' => $message,'alert-type' => 'success');
                return redirect()->back()->with($notification);
        }
    }
    public function BrandStatusChange($id)
    {
            $update_status = 1;
            $product = brand::find($id);
            if($product->status == 1)
            {
                $update_status = 0;
    
            }else{
                $update_status = 1;
            }
            $product_status = brand::where('id',$id)->update([
                'status' => $update_status
            ]);
            if(product_status)
            {
                return response()->json([
                    'status' => 'success',
                    'update' => 'Updated'
                ]);
            }
    
    }
}
