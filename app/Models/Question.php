<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


public function answers_name()
    {
        return $this->hasMany(QuestionsAnswer::class, 'quetion_id', 'id');
    }
}
