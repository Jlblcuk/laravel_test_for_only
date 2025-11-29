<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComfortCategory extends Model
{
    public function positions()
    {
        return $this->belongsToMany(Position::class, 'position_comfort_category');
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    /** @use HasFactory<\Database\Factories\ComfortCategoryFactory> */
    use HasFactory;
}
