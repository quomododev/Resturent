<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = [
        'status',
    ];
    public function translate_country()
    {
        return $this->belongsTo(TranslateCountry::class,'id','country_id')->where('lang_code','en');
    }

    public function translate_country_lang()
    {
      if(Session::get('front_lang')){
         $lang_code = Session::get('front_lang');
     }
     else{
         $lang_code = 'en';
     }
        return $this->belongsTo(TranslateCountry::class,'id','country_id')->where('lang_code',$lang_code);
    }
    protected $appends = ['name'];
    protected $hidden = ['translate_country_lang'];

    public function getNameAttribute()
    {
       return $this->translate_country_lang->name; 
    }

}
