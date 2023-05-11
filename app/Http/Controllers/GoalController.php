<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function index(Category $category)
    {
        return view('goals.index')->with('category', $category);
    }
    public function create()
    {

        dd("create");
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function show(string $id)
    {
        dd("show");
    }

    public function edit(string $id)
    {
        dd("edit");
    }

    public function update(Request $request, string $id)
    {
        dd("update");
    }

    public function destroy(string $id)
    {
        dd("destroy");
    }
}
