<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use App\Models\Goal;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $message = session('message.success');
        return view('categories.index')->with('categories', $categories)->with('message', $message);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoryFormRequest $request)
    {
        // $request->validate('name');

        $data = $request->all();
        $category = Category::create($data);
        // dd($category);
        $goals = $data['goals'];
        $content = [];
        $now = now();

        foreach ($goals as $goal) {
            $content[] = [
                'category_id' => $category->id,
                'name' => $goal,
                'created_at' => $now,
                'updated_at' => $now
            ];
        }
        Goal::insert($content);


        return to_route('categories.index')
            ->with('message.success', "Categoria '{$category->name}' adicionada com sucesso!");
    }

    /* public function show()
    {
        return view();
    } */

    public function edit(Category $category)
    {
        return view('categories.edit')->with('category', $category);
    }

    public function update(Category $category,  CategoryFormRequest $request)
    {
        $category->fill($request->all());
        $category->save();
        return to_route('categories.index')
            ->with('message.success', "Categoria '{$category->name}' atualizada com sucesso!");
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return to_route('categories.index')
            ->with('message.success', "Categoria '{$category->name}' removida com sucesso!");
    }
}
