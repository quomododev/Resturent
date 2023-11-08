<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_page_one_visibilitiy extends Model
{
    use HasFactory;

    protected $table = 'home_page_one_visibilities';
    protected $fillable = [
        'default_name',
        'section_name',
        'status',
        'quantity'
    ];
}
