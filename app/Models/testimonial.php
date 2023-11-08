<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';
    protected $fillable = [
        'name',
        'designation',
        'image',
        'comment',
        'status'
    ];
    public function translate_testimonial()
    {
        return $this->belongsTo(TranslateTestimonial::class,'id','testimonial_id')->where('lang_code','en');
    }

    public function translate_testimonial_lang()
    {
        if(Session::get('front_lang')){
            $lang_code = Session::get('front_lang');
        }
        else{
            $lang_code = 'en';
        }
        return $this->belongsTo(TranslateTestimonial::class,'id','testimonial_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['name','comment','designation'];
    protected $hidden = ['translate_testimonial_lang'];


    public function getNameAttribute()
    {
       return $this->translate_testimonial_lang->name;

    }
    public function getCommentAttribute()
    {
       return $this->translate_testimonial_lang->comment;

    }
    public function getDesignationAttribute()
    {
       return $this->translate_testimonial_lang->designation;

    }
}
