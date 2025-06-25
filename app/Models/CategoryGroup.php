<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class CategoryGroup extends Model
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



    public function categories(): HasManyThrough
    {
        return $this->hasManyThrough(
            Category::class,
            SubCategory::class,
           )->distinct(); 
    }

    public function categorySections(): HasManyThrough
    {
        return $this->hasManyThrough(
            CategorySection::class, 
            SubCategory::class,
            'category_group_id',
            'id',
            'id',
            'category_section_id'
        )->distinct();
    }
    
    public function subCategories(): HasMany
    {
        return $this->hasMany(SubCategory::class);
    }
    public function categoryHierarchies(): HasMany
    {
        return $this->hasMany(CategoryHierarchy::class);
    }
}
