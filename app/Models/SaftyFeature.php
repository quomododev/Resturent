<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaftyFeature extends Model
{
    use HasFactory;

    protected $table = 'safty_feature';

    public function translate_safty_feature()
    {
        return $this->belongsTo(TranslateSaftyFeature::class,'id','saftyfeature_id')->where('lang_code','en');
    }
}
