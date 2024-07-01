<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['name', 'status', 'time', 'Tmark', 'Pmark'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
