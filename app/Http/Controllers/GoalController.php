<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index(Category $category)
    {
        $goals = $category->goals;

        return view('goals.index')->with('goals', $goals);
    }
}
