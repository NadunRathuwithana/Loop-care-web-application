<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionsAnswer extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'quetion_id',
        'answer',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
