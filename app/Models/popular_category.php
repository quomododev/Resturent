<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class popular_category extends Model
{
    use HasFactory;
    protected $table = "popular_categories";
    protected $fillable = [
        'category_id',
        'status'
    ];
    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
