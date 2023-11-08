<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcement_modal extends Model
{
    use HasFactory;
    protected $table = 'announcement_modals';
    protected $fillable = [
        'title',
        'description',
        'image',
        'expired_date',
        'status'
    ];
}
