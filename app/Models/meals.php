<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'meal_time',
        'cover_image',
        'effective_age',
        'restricted_diseases',
        'short_description',
        'ingredients',
        'serving_size',
        'total_calories',
        'total_fat',
        'total_sugar',
        'total_protein',
        'total_carbohydrate',
        'making_instructions',
    ];

}
