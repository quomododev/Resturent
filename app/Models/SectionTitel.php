<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
class SectionTitel extends Model
{
    use HasFactory;

    public function translate_section()
    {
        return $this->belongsTo(TranslateSectionTitel::class,'id','section_id')->where('lang_code','en');
    }

    public function section_translate_lang()
    {
        if(Session::get('front_lang')){
            $lang_code = Session::get('front_lang');
        }
        else{
            $lang_code = 'en';
        }
        return $this->belongsTo(TranslateSectionTitel::class,'id','section_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['top_ber_message','top_ber_phone','top_ber_email','category_titel','featured_titel','promotion_titel',
                            'traditional_food_titel','testonimal_titel','news_titel','subscribe_titel','payment_titel'];
    protected $hidden = ['section_translate_lang'];


    public function getTopBerMessageAttribute()
    {
       return $this->section_translate_lang->top_ber_message;
    }
    public function getTopBerPhoneAttribute()
    {
       return $this->section_translate_lang->top_ber_phone;
    }
    public function getTopBerEmailAttribute()
    {
       return $this->section_translate_lang->top_ber_email;
    }
    public function getCategoryTitelAttribute()
    {
       return $this->section_translate_lang->category_titel;
    }
    public function getFeaturedTitelAttribute()
    {
       return $this->section_translate_lang->featured_titel;
    }
    public function getPromotionTitelAttribute()
    {
       return $this->section_translate_lang->promotion_titel;
    }
    public function getTraditionalFoodTitelAttribute()
    {
       return $this->section_translate_lang->traditional_food_titel;
    }
    public function getTestonimalTitelAttribute()
    {
       return $this->section_translate_lang->testonimal_titel;
    }
    public function getNewsTitelAttribute()
    {
       return $this->section_translate_lang->news_titel;
    }
    public function getSubscribeTitelAttribute()
    {
       return $this->section_translate_lang->subscribe_titel;
    }
    public function getPaymentTitelAttribute()
    {
       return $this->section_translate_lang->payment_titel;
    }
}
