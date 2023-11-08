<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\team_social_link;

class our_team extends Model
{
    use HasFactory;
    protected $table = 'our_teams';
    protected $fillable = [
        'name',
        'designation',
        'image',
        'facebook',
        'twitter',
        'linkedin'
    ];
    public function GetSocialLink()
    {
        return $this->hasMany(team_social_link::class,'team_member_id','id');
    }
}
