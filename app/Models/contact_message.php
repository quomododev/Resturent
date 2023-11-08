<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_message extends Model
{
    use HasFactory;
    protected $table = 'contact_messages';
    protected $fillable=[
        'name',
        'email',
        'phone' ,
        'subject' ,
        'message'
    ];
}
