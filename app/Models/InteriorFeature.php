<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteriorFeature extends Model
{
    use HasFactory;
    protected $table = 'interior_featire';

    public function translate_interiorfeature()
    {
        return $this->belongsTo(TranslateInteriorFeature::class,'id','interiorfeature_id')->where('lang_code','en');
    }
}
