<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Property extends Model
{
    use HasFactory;

    public function property_translate()
    {
        return $this->belongsTo(TranslateProperty::class,'id','property_id')->where('lang_code','en');
    }
    public function property_translate_lang()
    {
        $lang_code = Session::get('front_lang');
        return $this->belongsTo(TranslateProperty::class,'id','property_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['title','description'];
    protected $hidden = ['property_translate_lang'];

    public function getTitleAttribute()
    {
       return $this->property_translate_lang->title;
        
    }
    public function getDescriptionAttribute()
    {
       return $this->property_translate_lang->description;
        
    }

}
