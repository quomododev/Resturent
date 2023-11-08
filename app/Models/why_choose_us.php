<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class why_choose_us extends Model
{
    use HasFactory;
    protected  $table = 'why_choose_us';
    protected $fillable = [
        'icon',
        'image',
        'status'
    ]; 
    public function whychooseus_translate()
    {
        return $this->belongsTo(TranslateWhychooseus::class,'id','why_choose_us_id')->where('lang_code','en');
    }

    public function whychooseus_translate_lang()
    {
        $lang_code = Session::get('front_lang');
        return $this->belongsTo(TranslateWhychooseus::class,'id','why_choose_us_id')->where('lang_code',$lang_code);
    }

    protected $appends = ['title','description'];
    protected $hidden = ['whychooseus_translate_lang'];

    public function getTitleAttribute()
    {
       return $this->whychooseus_translate_lang->title;
        
    }
    public function getDescriptionAttribute()
    {
       return $this->whychooseus_translate_lang->description;
        
    }
}
