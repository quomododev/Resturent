<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\addresse;

class Order extends Model
{
    use HasFactory;

    public function userName()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function shippingAddress()
    {
        return $this->belongsTo(addresse::class,'address_id','id');
    }
}
