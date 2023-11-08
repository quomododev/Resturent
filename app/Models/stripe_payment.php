<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stripe_payment extends Model
{
    use HasFactory;
    protected $table = 'stripe_payments';
}
