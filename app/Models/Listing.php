<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
    ];

    //************ Property and Listing Relationship function *****************
    public function property()
    {
        return $this->belongsTo(Property::class,'id','listing_id');
    }
    public function flor_plan()
    {
        return $this->hasMany(FlorPlan::class,'listing_id','id');
    }

    //************ Car and Listing Relationship function *****************
    public function car()
    {
        return $this->belongsTo(Car::class,'id','listing_id');
    }
    public function specification()
    {
        return $this->hasMany(Specification::class,'listing_id','id');
    }

    //************ Image Relationship function *****************
    public function image_gallery()
    {
        return $this->hasMany(ImageGallery::class,'listing_id','id');
    }

    //*************/ Agent ***********/
    public function agent()
    {
        return $this->belongsTo(User::class,'agent_id','id');
    }
}
