<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryHierarchy extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_id',
        'category_id',
        'category_section_id',
        'category_group_id',
    ];

    public function subCategory()
    {
        return $this->belongsTo(Category::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categorySection()
    {
        return $this->belongsTo(CategorySection::class);
    }

    public function categoryGroup()
    {
        return $this->belongsTo(CategoryGroup::class);
    }
}
