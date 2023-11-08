<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $table = 'colors';

    public function color_translate()
    {
        return $this->belongsTo(TranslateColor::class,'id','color_id')->where('lang_code','en');
    }
}


