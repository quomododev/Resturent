<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_review extends Model
{
    use HasFactory;

    public function Product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
}
