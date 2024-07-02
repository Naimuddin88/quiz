<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
<<<<<<< HEAD
    protected $fillable = ['name', 'status', 'time', 'Tmark', 'Pmark'];
=======
    use HasFactory;

    protected $fillable = ['name', 'status','time','Tmark','Pmark']; 
>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
<<<<<<< HEAD
=======



>>>>>>> 3ac226ec07428c5d1377e196fad1491de67a01ac
