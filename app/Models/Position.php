<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = ['name'];

    public function comfortCategories()
    {
        return $this->belongsToMany(ComfortCategory::class, 'position_comfort_category');
    }


    /** @use HasFactory<\Database\Factories\PositionFactory> */
    use HasFactory;
}
