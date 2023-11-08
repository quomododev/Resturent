<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TranslateTeam;
use App\Models\Language;
use Image;
use Str;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::with('translate_team')->paginate(8);
        return view('Admin.Teams',compact('teams'));
    }
    public function create()
    {
        return view('Admin.CreateTeam');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
        ]);
        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->image)
                ->save(public_path().'/'.$image_name);
        }
        $team = new Team();
        $team->image = $image_name;
        $team->save();

        $languages = Language::where('status', 'active')->select('id','name','lang_code')->get();  
        foreach($languages as $language)
        {
          $translate = new TranslateTeam();
          $translate->team_id = $team->id;
          $translate->lang_code = $language->lang_code;
          $translate->name = $request->name;
          $translate->designation = $request->designation;
          $translate->save();
        }

        $message = "Insert Successfully!!";
        $notification = array('message' => $message,'alert-type' => 'success');
        return redirect()->route('teams.edit',$team->id)->with($notification);
    }
    public function edit($id)
    {
        $team = Team::with('translate_team')->find($id);
        return view('Admin.EditTeam',compact('team'));

    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
        ]);

        $team = Team::find($id);
        $old_image = $team->image;
        if($request->image){
            $extention = $request->image->getClientOriginalExtension();
            $image_name = Str::slug($request->name).date('-Y-m-d-h-i-s-').rand(999,9999).'.'.$extention;
            $image_name = 'uploads/custom-images/'.$image_name;
            Image::make($request->image)
                ->save(public_path().'/'.$image_name);

            if($old_image){
                if(File::exists(public_path().'/'.$old_image))unlink(public_path().'/'.$old_image);
            }
        }
        else{
            $image_name = $team->image;
        }
        $team->image = $image_name;
        $team->save();

        $translate = TranslateTeam::where('team_id',$id)->where('lang_code','en')->first();
        $translate->name = $request->name;
        $translate->designation = $request->designation;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function delete($id)
    {
       $team = Team::find($id);
       $team->delete($id);
       TranslateTeam::where('team_id',$id)->delete();

       $message = " Delete Successfully!!";
       $notification = array('message'=> $message,'alert-type' => 'success');
       return redirect()->back()->with($notification);
    }

    public function editLanguage($teamId,$langCode)
    {
        $team =  Team::with('translate_team')->find($teamId);
        $translate_team =  TranslateTeam::where('team_id',$teamId)->where('lang_code',$langCode)->first();
        $selected_language = Language::where('lang_code',$langCode)->select('name')->first();
        return view('Admin.EditTeam',compact('translate_team','team','selected_language'));
    }
    public function updateLanguage(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
        ]);

        $translate = TranslateTeam::find($id);
        $translate->name = $request->name;
        $translate->designation = $request->designation;
        $translate->save();

        $message = "Update Successfully!!";
        $notification = array('message'=> $message,'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
