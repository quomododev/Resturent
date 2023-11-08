<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\video_section;
use App\Models\how_work;
use App\Models\our_product;
use Validator;
use Str;
use Image;

class AllSectionController extends Controller
{
    public function videosectionIndex()
    {
        $video_section = video_section::first();
        return view('Admin.VideoSection',compact('video_section'));
    }
    public function videosectionUpdate(Request $request,$id)
    {

        $validate = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'video_link' => 'required',
        ]);
        if($validate->fails())
        {
            $message = $validate->errors();
            $notification = array('message' => $message, 'alert-type' =>'error');
            return redirect()->back()->with($notification);
        }
        $video_section = video_section::find($id);
        $old_video_thumbnail = $video_section->video_thumbnail;
        $old_image_1 = $video_section->image_1;
        $old_image_2 = $video_section->image_2;

        if($request->video_thumbnail){
            $extention = $request->video_thumbnail->getClientOriginalExtension();
            $video_thumbnail = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $video_thumbnail = 'uploads/web-image/'.$video_thumbnail;
            Image::make($request->video_thumbnail)
                ->save(public_path().'/'.$video_thumbnail);
        }else{
            $video_thumbnail = $old_video_thumbnail;
        }

        if($request->image_1){
            $extention = $request->image_1->getClientOriginalExtension();
            $image_1 = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_1 = 'uploads/web-image/'.$image_1;
            Image::make($request->image_1)
                ->save(public_path().'/'.$image_1);
        }else{
            $image_1 = $old_image_1;
        }

        if($request->image_2){
            $extention = $request->image_2->getClientOriginalExtension();
            $image_2 = Str::slug($request->title).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_2 = 'uploads/web-image/'.$image_2;
            Image::make($request->image_2)
                ->save(public_path().'/'.$image_2);
        }else{
            $image_2 = $old_image_2;
        }

        video_section::where('id',$id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'video_link' => $request->video_link,
            'video_thumbnail' => $video_thumbnail,
            'image_1' => $image_1,
            'image_2' => $image_2,
        ]);
        $message = "Updated successfully!!";
        $notification = array('message' => $message, 'alert-type' =>'success');
        return redirect()->back()->with($notification);
    }
    public function howWorksectionindex()
    {
        $how_work = how_work::first();
        return view('Admin.HowItWork',compact('how_work'));
    }
    public function howWorksectionUpdate(Request $request,$id)
    {
        
        $validate = Validator::make($request->all(),[
            'title_1' => 'required|string',
            'description_1' => 'required|string',
            'title_2' => 'required|string',
            'description_2' => 'required|string',
            'title_3' => 'required|string',
            'description_3' => 'required|string',
            'title_4' => 'required|string',
            'description_4' => 'required|string',
            'title_5' => 'required|string',
            'description_5' => 'required|string',
            'title_6' => 'required|string',
            'description_6' => 'required|string',
        ]);
        
        if($validate->fails())
        {
            $message = $validate->errors();
            $notification = array('message' => $message, 'alert-type' =>'error');
            return redirect()->back()->with($notification);
        }
        how_work::where('id',$id)->update([
            'title_1' => $request->title_1,
            'description_1' => $request->description_1,
            'title_2' => $request->title_2,
            'description_2' => $request->description_2,
            'title_3' => $request->title_3,
            'description_3' => $request->description_3,
            'title_4' => $request->title_4,
            'description_4' => $request->description_4,
            'title_5' => $request->title_5,
            'description_5' => $request->description_5,
            'title_6' => $request->title_6,
            'description_6' => $request->description_6,
        ]);

        $message = "Successfully Updated";
        $notification = array('message' => $message, 'alert-type' =>'error');
        return redirect()->back()->with($notification);
    }

    public function OurProductIndex()
    {
        $our_product = our_product::first();
        return view('Admin.EditOurProduct',compact('our_product'));
    }
    public function UpdateOurProduct(Request $request ,$id)
    {
        $validate = Validator::make($request->all(),[
            'title_1' => 'required|string',
            'number_1' => 'required|string',
            'title_2' => 'required|string',
            'number_2' => 'required|string',
            'title_3' => 'required|string',
            'number_3' => 'required|string',
            'title_4' => 'required|string',
            'number_4' => 'required|string',
        ]);

        if($validate->fails()){
            $message = $validate->errors();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
        }
        our_product::where('id',$id)->update([
            'title_1' => $request->title_1,
            'number_1' => $request->number_1,
            'title_2' => $request->title_2,
            'number_2' => $request->number_2,
            'title_3' => $request->title_3,
            'number_3' => $request->number_3,
            'title_4' => $request->title_4,
            'number_4' => $request->number_4
        ]);

        $message = 'Successfully Updated!!';
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
