<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryGroup extends Model
{
    protected $fillable = [
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


    public function categorySections(): HasMany
    {
        return $this->hasMany(CategorySection::class);
    }
}
