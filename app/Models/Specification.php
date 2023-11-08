<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $table = 'specifications';

    public function translate_specification()
    {
        return $this->belongsTo(TranslateSpecification::class,'id','specification_id')->where('lang_code','en');
    }
}
