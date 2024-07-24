<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    protected $fillable = [
        'quiz_id',
        'question_id',
        'answer',
        'user_id', // Ensure this is included
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}


