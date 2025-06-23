<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'status_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
