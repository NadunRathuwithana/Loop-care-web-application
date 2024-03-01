<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MealRestrictions extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = [
        'meal_id',
        'restrict',
    ];


}
