<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategorySection extends Model
{
    protected $fillable = [
        'category_group_id',
        'name',
        'slug'
    ];

    public function categoryGroup(): BelongsTo
    {
        return $this->belongsTo(CategoryGroup::class);
    }


    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
