<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutdoorFeature extends Model
{
    use HasFactory;

    protected $table = 'outdoor_features';

    public function outdoorfeature_translate()
    {
        return $this->belongsTo(TranslateOutdoorFeature::class,'id','outdoor_feature_id')->where('lang_code','en');
    }
}
