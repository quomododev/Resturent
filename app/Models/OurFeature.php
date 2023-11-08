<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurFeature extends Model
{
    use HasFactory;
    protected $table = 'our_features';

    public function translate_ourfeature()
    {
        return $this->belongsTo(TranslateOurFeature::class,'id','our_feature_id')->where('lang_code','en');
    }
}
