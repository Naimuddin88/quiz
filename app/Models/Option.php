<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
<<<<<<< HEAD
    protected $fillable = ['question_id', 'option_text', 'is_correct'];
=======
    use HasFactory;

    protected $fillable = ['question_id', 'option', 'is_correct'];
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
<<<<<<< HEAD

=======
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
