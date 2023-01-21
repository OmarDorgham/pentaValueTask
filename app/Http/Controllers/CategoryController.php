<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::tree()->get()->toTree();
        return response()->json(['categories' => $categories]);
    }
}
