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
        'select_addresses','add_new','add_new_address','back','first_name','last_name','phone','email','country','select_country','state','select_state','city',
        'select_city','address','office','save_now','perfect_time_for_delivery','today','tomorrow','time_schedule','	select_time_schedule','cart_summary',
        'delivery','pick_up','in_restaurant','	apply_coupon','apply','subtotal','discount','delivery_charges','grand_total','process_order',
        'contact_us','name','telephone','	subject','message','send_now','call_restaurant','select_guest','number_of_guest','all_food','enter_keyword_here','select_category',
        'stars','food_details','Food_video','review','sent_review','wishlist','remove','menu','my_cart','sign_up','login','Size','vat',
    ];
    protected $hidden = ['message_translate_lang'];

    public function getRemoveAttribute()
    {
       return $this->message_translate_lang->remove;
    }
    public function getVatAttribute()
    {
       return $this->message_translate_lang->vat;
    }
    public function getSizeAttribute()
    {
       return $this->message_translate_lang->size;
    }
    public function getSignUpAttribute()
    {
       return $this->message_translate_lang->sign_up;
    }
    public function getLoginAttribute()
    {
       return $this->message_translate_lang->login;
    }
    public function getMenuAttribute()
    {
       return $this->message_translate_lang->menu;
    }
    public function getMyCartAttribute()
    {
       return $this->message_translate_lang->my_cart;
    }
    public function getwishlistAttribute()
    {
       return $this->message_translate_lang->wishlist;
    }
    public function getStarsAttribute()
    {
       return $this->message_translate_lang->stars;
    }
    public function getFoodDetailsAttribute()
    {
       return $this->message_translate_lang->food_details;
    }
    public function getFoodVideoAttribute()
    {
       return $this->message_translate_lang->Food_video;
    }
    public function getReviewAttribute()
    {
       return $this->message_translate_lang->review;
    }
    public function getSentReviewAttribute()
    {
       return $this->message_translate_lang->sent_review;
    }
    public function getAllFoodAttribute()
    {
       return $this->message_translate_lang->all_food;
    }
    public function getEnterKeywordHereAttribute()
    {
       return $this->message_translate_lang->enter_keyword_here;
    }
    public function getSelectCategoryAttribute()
    {
       return $this->message_translate_lang->select_category;
    }
    public function getCallRestaurantAttribute()
    {
       return $this->message_translate_lang->call_restaurant;
    }
    public function getSelectGuestAttribute()
    {
       return $this->message_translate_lang->select_guest;
    }
    public function getNumberOfGuestAttribute()
    {
       return $this->message_translate_lang->number_of_guest;
    }
    public function getContactUsAttribute()
    {
       return $this->message_translate_lang->contact_us;
    }
    public function getNameAttribute()
    {
       return $this->message_translate_lang->name;
    }
    public function getTelephoneAttribute()
    {
       return $this->message_translate_lang->telephone;
    }
    public function getSubjectAttribute()
    {
       return $this->message_translate_lang->subject;
    }
    public function getMessageAttribute()
    {
       return $this->message_translate_lang->message;
    }
    public function getSendNowAttribute()
    {
       return $this->message_translate_lang->send_now;
    }
    public function getProcessOrderAttribute()
    {
       return $this->message_translate_lang->process_order;
    }
    public function getShoppingCartAttribute()
    {
       return $this->message_translate_lang->shopping_cart;
    }
    public function getSelectAddressesAttribute()
    {
       return $this->message_translate_lang->select_addresses;
    }
    public function getAddNewAttribute()
    {
       return $this->message_translate_lang->add_new;
    }
    public function getAddNewAddressAttribute()
    {
       return $this->message_translate_lang->add_new_address;
    }
    public function getBackAttribute()
    {
       return $this->message_translate_lang->back;
    }
    public function getFirstNameAttribute()
    {
       return $this->message_translate_lang->first_name;
    }
    public function getLastNameAttribute()
    {
       return $this->message_translate_lang->last_name;
    }
    public function getImageAttribute()
    {
       return $this->message_translate_lang->image;
    }
    public function getPhoneAttribute()
    {
       return $this->message_translate_lang->phone;
    }
    public function getEmailAttribute()
    {
       return $this->message_translate_lang->email;
    }
    public function getCountryAttribute()
    {
       return $this->message_translate_lang->country;
    }
    public function getSelectCountryAttribute()
    {
       return $this->message_translate_lang->select_country;
    }
    public function getStateAttribute()
    {
       return $this->message_translate_lang->state;
    }
    public function getSelectStateAttribute()
    {
       return $this->message_translate_lang->select_state;
    }
    public function getCityAttribute()
    {
       return $this->message_translate_lang->city;
    }
    public function getSelectCityAttribute()
    {
       return $this->message_translate_lang->select_city;
    }
    public function getAddressAttribute()
    {
       return $this->message_translate_lang->address;
    }
    public function getOfficeAttribute()
    {
       return $this->message_translate_lang->office;
    }
    public function getSaveNowAttribute()
    {
       return $this->message_translate_lang->save_now;
    }
    public function getPerfectTimeForDeliveryAttribute()
    {
       return $this->message_translate_lang->perfect_time_for_delivery;
    }
    public function getTodayAttribute()
    {
       return $this->message_translate_lang->today;
    }
    public function getTomorrowAttribute()
    {
       return $this->message_translate_lang->tomorrow;
    }
    public function getTimeScheduleAttribute()
    {
       return $this->message_translate_lang->select_time_schedule;
    }

    public function getCartSummaryAttribute()
    {
       return $this->message_translate_lang->cart_summary;
    }
    public function getDeliveryAttribute()
    {
       return $this->message_translate_lang->delivery;
    }
    public function getInRestaurantAttribute()
    {
       return $this->message_translate_lang->in_restaurant;
    }
    public function getPickUpAttribute()
    {
       return $this->message_translate_lang->pick_up;
    }
    public function getApplyCouponAttribute()
    {
       return $this->message_translate_lang->apply_coupon;
    }
    public function getApplyAttribute()
    {
       return $this->message_translate_lang->apply;
    }
    public function getSubtotalAttribute()
    {
       return $this->message_translate_lang->subtotal;
    }
    public function getDiscountAttribute()
    {
       return $this->message_translate_lang->discount;
    }
    public function getDeliveryChargesAttribute()
    {
       return $this->message_translate_lang->delivery_charges;
    }
    public function getGrandTotalAttribute()
    {
       return $this->message_translate_lang->grand_total;
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
