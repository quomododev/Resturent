<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin;
use App\Models\blog_category;
use App\Models\blog_comment;
use Session;

class blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';

    // protected $fillable = [
    //     'admin_id',
    //     'slug',
    //     'blog_category_id',
    //     'image',
    //     'status',
    // ];

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
    public function category()
    {
        return $this->belongsTo(blog_category::class,'blog_category_id','id')->select('id','status');
    }
    public function comment()
    {
        return $this->hasMany(blog_comment::class,'blog_id','id');
    }
    public function blog_translate()
    {
        return $this->belongsTo(BlogTranslate::class,'id','blog_id')->where('lang_code','en');
    }

    public function blog_translate_lang()
    {
        if(Session::get('front_lang')){
            $lang_code = Session::get('front_lang');
        }
        else{
            $lang_code = 'en';
        }
        return $this->belongsTo(BlogTranslate::class,'id','blog_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['title','description','seo_title','seo_description','tag'];
    protected $hidden = ['blog_translate_lang'];


    public function getTitleAttribute()
    {
       return $this->blog_translate_lang->title;
    }
    public function getDescriptionAttribute()
    {
       return $this->blog_translate_lang->description;
    }

    public function getSeoTitleAttribute()
    {
       return $this->blog_translate_lang->seo_title;
    }

    public function getSeoDescriptionAttribute()
    {
       return $this->blog_translate_lang->seo_description;
    }
    public function getTagAttribute()
    {
       return $this->blog_translate_lang->tag;
    }

}
