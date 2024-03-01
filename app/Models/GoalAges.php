<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalAges extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_id',
        'effective_age',
    ];
}
