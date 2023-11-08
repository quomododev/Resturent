<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\blog;

class popular_post extends Model
{
    use HasFactory;
    protected $table = 'popular_posts';
    protected $fillable = [
        'blog_id',
        'status'
    ];
    public function blog()
    {
        return $this->belongsTo(blog::class,'blog_id','id');
    }
}
