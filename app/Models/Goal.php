<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = [
        'goal_name',
        'category',
        'goal_time',
        'goal_calories',
        'goal_difficulty',
        'goal_image',
        'short_description',
    ];

    public function restrictions_name()
    {
        return $this->hasMany(GoalRestrictions::class, 'goal_id', 'id');
    }
    public function ages_name()
    {
        return $this->hasMany(GoalAges::class, 'goal_id', 'id');
    }
}
