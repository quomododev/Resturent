<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pricing_plan;
use App\Models\User;

class purches_plan extends Model
{
    use HasFactory;
    protected $table = 'purches_plan';
    protected $fillable = [
        'plan_id',
        'transection_id',
        'payment_type',
        'purches_id',
        'amount',
        'user_id'
    ];
    public function GetPlan()
    {
        return $this->belongsTo(PricingPlan::class,'plan_id','id');
    }
    public function GetUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
