<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class featured_category extends Model
{
    use HasFactory;
    protected $table = "featured_categories";
    protected $fillable = [
        'category_id',
        'status'
    ];
    public function category()
    {
        return $this->belongsTo(category::class,'category_id','id');
    }
}
