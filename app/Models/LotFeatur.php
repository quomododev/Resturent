<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotFeatur extends Model
{
    use HasFactory;
    protected $table = 'lot_feature';

    public function lotfeature_translate()
    {
        return $this->belongsTo(TranslateLotFeatur::class,'id','lot_feature_id')->where('lang_code','en');
    }
}
