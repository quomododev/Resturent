<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class blog_comment extends Model
{
    use HasFactory;
    protected $table = 'blog_comments';
    protected $fillable = [
        'blog_id',
        'User_id',
        'comment',
        'status'
    ];
    public function GetUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function GetBlog()
    {
        return $this->belongsTo(blog::class,'blog_id','id');
    }
}
