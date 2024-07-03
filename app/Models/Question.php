<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Define the relationship with the Option model
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
