<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop_page extends Model
{
    use HasFactory;
    protected $table = 'shop_pages';
    protected $fillable = [
        'header_one',
        'header_two',
        'title_one',
        'title_two',
        'banner',
        'link',
        'button_text',
        'status',
        'filter_price_range'
    ];
}
