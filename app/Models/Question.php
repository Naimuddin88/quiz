<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
<<<<<<< HEAD
    protected $fillable = ['quiz_id', 'question_text'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
=======
    use HasFactory;

    protected $fillable = ['quiz_id', 'question'];
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
<<<<<<< HEAD
}


=======

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}

>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
