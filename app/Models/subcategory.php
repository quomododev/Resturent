<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class subcategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';
    protected $fillable = [
        'category_id',
        'agent_id',
        'name',
        'slug',
        'status'
    ];
    public function category(){

        return $this->belongsTo(category::class);
    }
    public function translate_subcategory()
    {
        return $this->belongsTo(TranslateSubcategory::class,'id','subcategory_id')->where('lang_code','en');
    }
}
