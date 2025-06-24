<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\CategoryGroup;
use App\Models\CategoryHierarchy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class CategorySection extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($model) {
    //         $slug = Str::slug($model->name);
    //         $originalSlug = $slug;
    //         $count = 1;

    //         // Ensure slug uniqueness
    //         while (static::where('slug', $slug)->where('id', '!=', $model->id)->exists()) {
    //             $slug = $originalSlug . '-' . $count++;
    //         }

    //         $model->slug = $slug;
    //     });
    // }

    public function categoryGroups(): HasManyThrough
    {
        return $this->hasManyThrough(
            CategoryGroup::class,
            CategoryHierarchy::class,
            'category_section_id',     
            'id',                  
            'id',                   
            'category_group_id'     
        )->distinct(); 
    }

    public function categories(): HasManyThrough
    {
        return $this->hasManyThrough(
            Category::class,
            CategoryHierarchy::class,
            'category_section_id',     
            'id',                  
            'id',                   
            'category_id'     
        )->distinct(); 
    }

    public function subCategories(): HasManyThrough
    {
        return $this->hasManyThrough(
            SubCategory::class,
            CategoryHierarchy::class,
            'category_section_id',     
            'id',                  
            'id',                   
            'sub_category_id'     
        )->distinct(); 
    }

    public function categoryHierarchies(): HasMany
    {
        return $this->hasMany(CategoryHierarchy::class);
    }
}
