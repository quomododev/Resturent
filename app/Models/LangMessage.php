<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class LangMessage extends Model
{
    use HasFactory;

    public function translate_langMessage()
    {
        return $this->belongsTo(TranslateLangMessage::class,'id','message_id')->where('lang_code','en');
    }

    public function message_translate_lang()
    {
        if(Session::get('front_lang')){
            $lang_code = Session::get('front_lang');
        }
        else{
            $lang_code = 'en';
        }
        return $this->belongsTo(TranslateLangMessage::class,'id','message_id')->where('lang_code',$lang_code);
    }

    protected $appends = [
        'get_your_menu','watch_video','see_more','add_to_cart','read_more','all_category','off','success','event','i_store','google_play',
    ];
    protected $hidden = ['message_translate_lang'];


    public function getGetYourMenuAttribute()
    {
       return $this->message_translate_lang->get_your_menu;
    }
    public function getWatchVideoAttribute()
    {
       return $this->message_translate_lang->watch_video;
    }

    public function getSeeMoreAttribute()
    {
       return $this->message_translate_lang->see_more;
    }

    public function getAddToCartAttribute()
    {
       return $this->message_translate_lang->add_to_cart;
    }

    public function getReadMoreAttribute()
    {
       return $this->message_translate_lang->read_more;
    }
    public function getAllCategoryAttribute()
    {
       return $this->message_translate_lang->all_category;
    }
    public function getOffAttribute()
    {
       return $this->message_translate_lang->off;
    }
    public function getSuccessAttribute()
    {
       return $this->message_translate_lang->success;
    }
    public function getEventAttribute()
    {
       return $this->message_translate_lang->event;
    }
    public function getIStoreAttribute()
    {
       return $this->message_translate_lang->i_store;
    }
    public function getGooglePlayAttribute()
    {
       return $this->message_translate_lang->google_play;
    }
}
