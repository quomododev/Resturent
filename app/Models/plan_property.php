<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pricing_plan;

class plan_property extends Model
{
    use HasFactory;
    protected $table = 'plan_properties';
    protected $fillable = [
        'plan_id',
        'plan_property',
        'status'
    ];
    public function GetPlan()
    {
        return $this->belongsTo(pricing_plan::class,'plan_id','id');
    }
}
