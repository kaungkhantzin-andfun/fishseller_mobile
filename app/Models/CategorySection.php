<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategorySection extends Model
{
    protected $fillable = [
        'category_group_id',
        'name',
        'slug'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $slug = Str::slug($model->name);
            $originalSlug = $slug;
            $count = 1;

            // Ensure slug uniqueness
            while (static::where('slug', $slug)->where('id', '!=', $model->id)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }

            $model->slug = $slug;
        });
    }

    public function categoryGroup(): BelongsTo
    {
        return $this->belongsTo(CategoryGroup::class);
    }


    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
