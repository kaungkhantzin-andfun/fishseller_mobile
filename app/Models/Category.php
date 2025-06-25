<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'category_section_id',
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
            SubCategory::class
        )->distinct(); 
    }

    public function categorySection(): BelongsTo
    {
        return $this->belongsTo(CategorySection::class);
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
