<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class ListingExplores extends Model
{
    use HasFactory;

    public function listingproperty_translate()
    {
        return $this->belongsTo(TranslateListingExplores::class,'id','explore_listing_id')->where('lang_code','en');
    }

    public function listingproperty_translate_lang()
    {
        $lang_code = Session::get('front_lang');
        return $this->belongsTo(TranslateListingExplores::class,'id','explore_listing_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['title','description','content'];
    protected $hidden = ['listingproperty_translate_lang'];


    public function getTitleAttribute()
    {
       return $this->listingproperty_translate_lang->title; 
    }
    public function getDescriptionAttribute()
    {
       return $this->listingproperty_translate_lang->description; 
    }

    public function getContentAttribute()
    {
       return $this->listingproperty_translate_lang->content; 
    }
}
