<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team_social_link extends Model
{
    use HasFactory;
    protected $table = 'team_social_links';
    protected $fillable = [
        'team_member_id',
        'social_link'
    ];
}
