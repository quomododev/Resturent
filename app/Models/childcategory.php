<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\subcategory;
use App\Models\category;
class childcategory extends Model
{
    use HasFactory;
    protected $table = 'child_categories';
    protected $fillable = [
        'subcategory_id',
        'slug',
        'status'
    ];
    public function subcategory()
    {
        return $this->belongsTo(subcategory::class);
    }
    public function translate_child_category()
    {
        return $this->belongsTo(TranslateChildCategory::class,'id','child_category_id')->where('lang_code','en');
    }
}
