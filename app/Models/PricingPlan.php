<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    use HasFactory;

    public function translate_pricingplan()
    {
        return $this->belongsTo(TranslatePricingPlan::class,'id','pricing_plan_id')->where('lang_code','en');
    }
}
