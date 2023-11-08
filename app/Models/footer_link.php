<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class footer_link extends Model
{
    use HasFactory;
    protected $table = 'footer_links';
    protected $fillable = [
        'column',
        'link',
    ];


    public function translate_footer_link()
    {
        return $this->belongsTo(TranslateFooterLink::class,'id','footer_link_id')->where('lang_code','en');
    }

    public function footer_link_translate_lang()
    {
        if(Session::get('front_lang')){
            $lang_code = Session::get('front_lang');
        }
        else{
            $lang_code = 'en';
        }
        return $this->belongsTo(TranslateFooterLink::class,'id','footer_link_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['title'];
    protected $hidden = ['footer_link_translate_lang'];


    public function getTitleAttribute()
    {
       return $this->footer_link_translate_lang->title;
    }

}
