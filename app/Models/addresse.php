<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  App\Models\country;
use  App\Models\country_state;
use  App\Models\city;

class addresse extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    public function GetCountry()
    {
        return $this->belongsTo(country::class,'country_id','id');
    }
    public function GetState()
    {
        return $this->belongsTo(country_state::class,'state_id','id');
    }
    public function GetCity()
    {
        return $this->belongsTo(city::class,'city_id','id');
    }


}
