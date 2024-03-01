<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealManagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'meal_name',
        'category',
        'meal_time',
        'meal_image',
        'short_description',
        'serving_size',
        'calories',
        'fat',
        'sugar',
        'protein',
        'carbohydrate',
        'instructions',
    ];

    public function ingredient_name()
    {
        return $this->hasMany(ingredient::class, 'meal_id', 'id');
    }
    public function ages_name()
    {
        return $this->hasMany(MealAges::class, 'meal_id', 'id');
    }

    public function restrictions_name()
    {
        return $this->hasMany(MealRestrictions::class, 'meal_id', 'id');
    }

}
