<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
class Team extends Model
{
    use HasFactory; 

    public function translate_team()
    {
        return $this->belongsTo(TranslateTeam::class,'id','team_id')->where('lang_code','en');
    }

    public function translate_team_lang()
    {
        $lang_code = Session::get('front_lang');
        return $this->belongsTo(TranslateTeam::class,'id','team_id')->where('lang_code',$lang_code);
    }
    protected $appends = ['name','designation'];
    protected $hidden = ['translate_team_lang'];

    public function getNameAttribute()
    {
       return $this->translate_team_lang->name; 
    }
    public function getDesignationAttribute()
    {
       return $this->translate_team_lang->designation; 
    }
}
