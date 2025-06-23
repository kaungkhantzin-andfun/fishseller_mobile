<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======

    protected $fillable = [
        'name',
        'guard_name',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
>>>>>>> e97fc1bdb8a6090be148083773162e404040421b
}
