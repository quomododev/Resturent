<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExteriorFeature extends Model
{
    use HasFactory;
    protected $table = 'exterior_feature';

    public function translate_exterior_feature()
    {
        return $this->belongsTo(TranslateExteriorFeature::class,'id','exteriorfeature_id')->where('lang_code','en');
    }
}
