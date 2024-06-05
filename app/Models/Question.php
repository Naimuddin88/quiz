<?php

// app/Models/Question.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['quiz_id', 'content', 'answer'];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}


