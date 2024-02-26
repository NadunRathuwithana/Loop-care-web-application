<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionSetup extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'effective_role_type',
        'question',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    
    public function questionAnswer()
    {
        return $this->hasMany(QuestionsAnswer::class, 'quetion_id', 'id');
    }    

}
