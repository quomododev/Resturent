<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_report extends Model
{
    use HasFactory;
    protected $table = 'product_reports';
    protected $fillable = [
        'user_id',
        'product_id',
        'seller_id',
        'subject',
        'description'
    ];
    public function product()
    {
        return $this->belongsTo(product::class,'product_id','id');
    }
    public function user()
    {
        return $this->belongsTo(user::class,'user_id','id');
    }
    public function vendor()
    {
        return $this->belongsTo(vendor::class,'seller_id','id');
    }
}
