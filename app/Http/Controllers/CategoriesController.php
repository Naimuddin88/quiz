<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function getCategories()
    {
        $categories = Categories::whereNull('category_id')
        ->with('childCategories')
        ->orderby('title' , 'asc')
        ->get();
        return view('categories', compact('categories'));
    }
}
