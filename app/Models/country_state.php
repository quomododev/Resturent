<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\country;


class country_state extends Model
{
    use HasFactory;
    protected $table = "country_states";
    protected $fillable = [
        'country_id',
        'name',
        'slug',
        'status'
    ];
    public function country()
    {
        return $this->belongsTo(country::class,'country_id','id');
    }
}
