<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
use App\Models\User;

class shopping_cart extends Model
{
    use HasFactory;
    protected $table = 'shopping_carts';
    protected $fillable = [
        'user_id',
        'product_id',
        'qty',
    ];
    public function GetProduct()
    {
        return $this->belongsTo(product::class,'product_id','id');

    }
    
    public function GetUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
