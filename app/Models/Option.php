<?php

// app/Models/Option.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    // Define the relationship with the Question model
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
