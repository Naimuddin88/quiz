<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'time',
        'Tmark',
        'Pmark',
        // other fields
        ];
        public function questions()
        {
            return $this->hasMany(Question::class);
        }
}
        
