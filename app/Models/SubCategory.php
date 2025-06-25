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
        'category_group_id',
        'category_section_id',
        'category_id',
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

    public function categoryGroup(): BelongsTo
    {
        return $this->belongsTo(CategoryGroup::class);
    }

    public function categorySection(): BelongsTo
    {
        return $this->belongsTo(CategorySection::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

}
