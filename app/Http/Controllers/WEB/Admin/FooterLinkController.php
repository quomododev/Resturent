<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\footer_link;
use App\Models\TranslateFooterLink;
use App\Models\Language;
use Validator;

class FooterLinkController extends Controller
{

    public function index()
    {
        $footer_link = footer_link::with('translate_footer_link')->orderBy('id','DESC')->paginate(10);
        return view('Admin.pages.footer.index',compact('footer_link'));
    }
    public function create()
    {
        return view('Admin.pages.footer.create_footer_link');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|string',
        ]);
        
        $footer_link = new footer_link();  
        $footer_link->link = $request->link;
        $footer_link->column = $request->column;
        $footer_link->status = 'active';
        $footer_link->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateFooterLink();
          $translate->footer_link_id = $footer_link->id;
          $translate->lang_code = $language->lang_code;
          $translate->title = $request->title;
          $translate->save();
        }
        $message = "Created succefully";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('column.edit',$footer_link->id)->with($notification);

    }
    public function edit($id)
    {
        $footer_link = footer_link::with('translate_footer_link')->find($id);
        return view('Admin.pages.footer.edit',compact('footer_link'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string',
            'link' => 'required|string',
        ]);
        
        $country = footer_link::find($id);  
        $footer_link->link = $request->link;
        $footer_link->column = $request->column;
        $country->save();

        $translate = TranslateFooterLink::where('footer_link_id',$id)->where('lang_code','en')->first();  
        $translate->footer_link_id = $translate->footer_link_id;
        $translate->lang_code = $translate->lang_code;
        $translate->title = $request->title;
        $translate->save();
        
        $message = "Updated succefully";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
       try{
        $footer_link = footer_link::find($id);
        $delete_footer_link = $footer_link->delete();
        TranslateFooterLink::where('footer_link_id',$id)->delete();
        $message = "deleted successfully";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
       }catch(\Exception $e)
       {
            $message = $e->getMessage();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
       }
    }


    public function editLanguage($FooterId,$langCode)
    {
        $footer_link =  footer_link::with('translate_footer_link')->find($FooterId);
        $translate_footer =  TranslateFooterLink::where('footer_link_id',$FooterId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.pages.footer.edit',compact('translate_footer','footer_link','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|string'
           ]);

        $tr = TranslateFooterLink::find($id);
        $tr->footer_link_id = $tr->footer_link_id;
        $tr->lang_code = $tr->lang_code;
        $tr->title = $request->title;
        $tr->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);

    }

    public function Status($id)
    {
        $update_status = 'active';
        $subcategory = footer_link::find($id);
        if($subcategory->status == 'active')
        {
            $update_status = 'inactive';
        }else{
            $update_status = 'active';
        }
        $subcategory->update([
            'status' => $update_status
        ]);
        return response()->json([
            'status' => '200',
            'message' => 'Statuss Updated',
        ]);   
    }


















    public function FirstColumn()
    {
        $first_column_link =  footer_link::where('column',1)
                            ->orderBy('id','ASC')
                            ->paginate(10);
        return view('Admin.FirstColumnLink',compact('first_column_link'));                    
    }
    public function FirstColumnLinkStore(Request $request)
    {
      try{
        $validate = Validator::make($request->all(),[
            'title' => 'required|string',
            'link' => 'required|string'
            ]);
            if($validate->fails())
            {
            $message = $validate->errors();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
            }
            $validate = footer_link::create([
            'column' => 1,
            'title' => $request->title,
            'link' => $request->link
            ]);
            if($validate)
            {
            $message = "First Column Link Added";
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
    public function FirstColumnLinkDelete($id)
    {
        try{
            
        $footer_link = footer_link::find($id);
        $delete_third_footer_link = $footer_link->delete();
        if($delete_third_footer_link)
        {
            $message = "First Column Link Deleted";
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
    public function FirstColumnLinkEdit($id)
    {
        $first_column_link = footer_link::find($id);
        return response()->json([
            'status' => 'success',
            'data' => $first_column_link,
        ]);
    }
    public function FirstColumnLinkUpdate(Request $request,$id)
    {
        try
        {
            $first_column_link = footer_link::find($id);

        $update = $first_column_link::where('id',$id)->update([
            'title' => $request->title,
            'link' => $request->link
        ]);
        if($update)
        {
            return response()->json([
                'status' => 'success',
            ]);
        }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => 'error',
                'data'  =>  $e->getMessage()
            ]);
        }
    }
    public function SecondColumn()
    {
        $second_column_link =  footer_link::where('column',2)
                            ->orderBy('id','ASC')
                            ->paginate(10);
        return view('Admin.SecondColumnLink',compact('second_column_link'));                    
    }
    public function SecondColumnLinkStore(Request $request)
    {
       try{

        $validate = Validator::make($request->all(),[
            'title' => 'required|string',
            'link' => 'required|string'
            ]);
            if($validate->fails())
            {
            $message = $validate->errors();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
            }
            $validate = footer_link::create([
            'column' => 2,
            'title' => $request->title,
            'link' => $request->link
            ]);
            if($validate)
            {
            $message = "second Column Link Added";
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
    public function SecondColumnLinkEdit($id)
    {
        $second_column_link = footer_link::find($id);
        return response()->json([
            'status' => 'success',
            'data' => $second_column_link,
        ]);
    }
    public function SecondColumnLinkUpdate(Request $request,$id)
    {
        try
        {
            $second_column_link = footer_link::find($id);

        $update = $second_column_link::where('id',$id)->update([
            'title' => $request->title,
            'link' => $request->link
        ]);
        if($update)
        {
            return response()->json([
                'status' => 'success',
            ]);
        }
        }catch(\Exception $e)
        {
            return response()->json([
                'status' => 'error',
                'data'  =>  $e->getMessage()
            ]);
        }
    }
    public function SecondColumnLinkDelete($id)
    {
        try{
            
        $footer_link = footer_link::find($id);
        $delete_third_footer_link = $footer_link->delete();
        if($delete_third_footer_link)
        {
            $message = "Second Column Link Deleted";
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
    public function ThirdColumn()
    {
        $third_column_link =  footer_link::where('column',3)
                            ->orderBy('id','ASC')
                            ->paginate(10);
        return view('Admin.ThirdColumnLink',compact('third_column_link'));                    
    }
    public function ThirdColumnLinkStore(Request $request)
    {
       try{

        $validate = Validator::make($request->all(),[
            'title' => 'required|string',
            'link' => 'required|string'
            ]);
            if($validate->fails())
            {
            $message = $validate->errors();
            $notification = array('message' => $message,'alert-type' => 'error');
            return redirect()->back()->with($notification);
            }
            $validate = footer_link::create([
            'column' => 3,
            'title' => $request->title,
            'link' => $request->link
            ]);
            if($validate)
            {
            $message = "Third Column Link Added";
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
    public function ThirdColumnLinkEdit($id)
    {
        $third_column_link = footer_link::find($id);
        return response()->json([
            'status' => 'success',
            'data' => $third_column_link,
        ]);
    }
    public function thirdColumnLinkUpdate(Request $request,$id)
    {
        try
        {
            $first_column_link = footer_link::find($id);

        $update = $first_column_link::where('id',$id)->update([
            'title' => $request->title,
            'link' => $request->link
        ]);
        if($update)
        {
            return response()->json([
                'status' => 'success',
            ]);
        }
        }catch(\Exception $e)
        {
            $message = $e->getMessage();
            $notification = array('message' => $message,'alert-type' => 'success');
            return redirect()->back()->with($notification);
        }
    }
    public function ThirdColumnLinkDelete($id)
    {
        try{
            
        $footer_link = footer_link::find($id);
        $delete_third_footer_link = $footer_link->delete();
        if($delete_third_footer_link)
        {
            $message = "Third Column Link Deleted";
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
}
