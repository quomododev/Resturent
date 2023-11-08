<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndoreFeature extends Model
{
    use HasFactory;
    protected $table = 'indore_feature';

    public function indorefeature_translate()
    {
        return $this->belongsTo(TranslateIndoreFeature::class,'id','indore_feature_id')->where('lang_code','en');
    }
}
