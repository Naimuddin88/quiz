<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    public function categories()
    {
        return $this->hasMany(Categories::class, 'category_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Categories::class, 'category_id')->with('categories');
    }
}
