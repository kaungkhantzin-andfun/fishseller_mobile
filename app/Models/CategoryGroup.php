<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryGroup extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function categorySections(): HasMany
    {
        return $this->hasMany(CategorySection::class);
    }
}
