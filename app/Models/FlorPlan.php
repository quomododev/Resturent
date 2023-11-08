<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlorPlan extends Model
{
    use HasFactory;
    protected $table = 'flor_plans';

    public function translate_florplan()
    {
        return $this->belongsTo(TranslateFlorPlan::class,'id','flor_plan_id')->where('lang_code','en');
    }

    public function translate_florplan_lang()
    {
        $lang_code = Session::get('front_lang');
        return $this->belongsTo(TranslateFlorPlan::class,'id','flor_plan_id')->where('lang_code',$lang_code);
    }
    protected $appends = ['title','description'];
    protected $hidden = ['translate_florplan_lang'];

   
    public function getTitleAttribute()
    {
       return $this->translate_contactus_lang->title; 
    }
    public function getDescriptionAttribute()
    {
       return $this->translate_contactus_lang->description; 
    }
}
