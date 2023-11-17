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
        'about_us','home','years','most_popular_items','blog','blog_details','tag','share','comments','leave_a_comment','required_fields_are_marked','submit_now',
        'search','latest_blog','follow_us','shopping_cart','image','details','price','quantity','total','action','addons','view','select_addon','optional','select_size',
        'select_quantity','update_cart','process_to_checkout',
    ];
    protected $hidden = ['message_translate_lang'];

    public function getImageAttribute()
    {
       return $this->message_translate_lang->image;
    }
    public function getDetailsAttribute()
    {
       return $this->message_translate_lang->details;
    }
    public function getPriceAttribute()
    {
       return $this->message_translate_lang->price;
    }
    public function getQuantityAttribute()
    {
       return $this->message_translate_lang->quantity;
    }
    public function getTotalAttribute()
    {
       return $this->message_translate_lang->total;
    }
    public function getActionAttribute()
    {
       return $this->message_translate_lang->action;
    }
    public function getAddonsAttribute()
    {
       return $this->message_translate_lang->addons;
    }
    public function getViewAttribute()
    {
       return $this->message_translate_lang->view;
    }
    public function getSelectAddonAttribute()
    {
       return $this->message_translate_lang->select_addon;
    }
    public function getSelectSizeAttribute()
    {
       return $this->message_translate_lang->select_size;
    }
    public function getOptionalAttribute()
    {
       return $this->message_translate_lang->optional;
    }
    public function getSelectQuantityAttribute()
    {
       return $this->message_translate_lang->select_quantity;
    }
    public function getUpdateCartAttribute()
    {
       return $this->message_translate_lang->update_cart;
    }
    public function getProcessToCheckoutAttribute()
    {
       return $this->message_translate_lang->process_to_checkout;
    }
    
    public function getCommentsAttribute()
    {
       return $this->message_translate_lang->comments;
    }
    public function getLeaveACommentAttribute()
    {
       return $this->message_translate_lang->leave_a_comment;
    }
    public function getRequiredFieldsAreMarkedAttribute()
    {
       return $this->message_translate_lang->required_fields_are_marked;
    }
    public function getSubmitNowAttribute()
    {
       return $this->message_translate_lang->submit_now;
    }
     public function getSearchAttribute()
    {
       return $this->message_translate_lang->search;
    }
     public function getLatestBlogAttribute()
    {
       return $this->message_translate_lang->latest_blog;
    }
     public function getFollowUsAttribute()
    {
       return $this->message_translate_lang->follow_us;
    }
    public function getShareAttribute()
    {
       return $this->message_translate_lang->share;
    }
    public function getBlogDetailsAttribute()
    {
       return $this->message_translate_lang->blog_details;
    }
    public function getTagAttribute()
    {
       return $this->message_translate_lang->tag;
    }
    public function getBlogAttribute()
    {
       return $this->message_translate_lang->blog;
    }
    public function getAboutUsAttribute()
    {
       return $this->message_translate_lang->about_us;
    }
    public function getMostPopularItemsAttribute()
    {
       return $this->message_translate_lang->most_popular_items;
    }
    public function getYearsAttribute()
    {
       return $this->message_translate_lang->years;
    }
    public function getHomeAttribute()
    {
       return $this->message_translate_lang->home;
    }
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
