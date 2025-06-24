<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'status_id',
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
            CategoryHierarchy::class,
            'sub_category_id',     
            'id',                  
            'id',                   
            'category_id'     
        )->distinct(); 
    }

    public function categorySections(): HasManyThrough
    {
        return $this->hasManyThrough(
            CategorySection::class,
            CategoryHierarchy::class,
            'sub_category_id',     
            'id',                  
            'id',                   
            'category_section_id'     
        )->distinct(); 
    }

    public function categoryGroups(): HasManyThrough
    {
        return $this->hasManyThrough(
            CategoryGroup::class,
            CategoryHierarchy::class,
            'sub_category_id',     
            'id',                  
            'id',                   
            'category_group_id'     
        )->distinct(); 
    }

    public function categoryHierarchies(): HasMany
    {
        return $this->hasMany(CategoryHierarchy::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
