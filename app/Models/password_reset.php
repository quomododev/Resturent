<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class password_reset extends Model
{
    use HasFactory;
    protected $table = 'password_resets';
    public $timestamps = false;
    public $primaryKey = 'email';
    protected $fillable = [
        'email',
        'token',
        'created_at'
    ];
}
