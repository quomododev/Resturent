<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $table = 'agency';

    public function agency_translate()
    {
        return $this->belongsTo(TranslateAgency::class,'id','agency_id')->where('lang_code','en');
    }
    public function country()
    {
        return $this->belongsTo(country::class);
    }
    public function city()
    {
        return $this->belongsTo(city::class);
    }
}
