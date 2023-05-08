<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Task;
use Illuminate\Http\Request;

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
        $category = Category::create($request->all());
        $goals = [];
        for ($i = 1; $i <= $request->goalName; $i++) {
            $goals[] = [
                'category_id' => $category->id,
                'number' => $i
            ];
        }
        Goal::insert($goals);

        $tasks = [];
        foreach ($category->goals as $goal) {
            for ($j = 1; $j <= $request->taskName; $j++) {
                $tasks[] = [
                    'goal_id' => $goal->id,
                    'number' => $j
                ];
            }
        }
        Task::insert($tasks);

        return to_route('categories.index')
            ->with('message.success', "Categoria '{$category->name}' adicionada com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(Category $category)
    {
        dd($category->goals);
        return view('categories.edit')->with('category', $category);
    }

    public function update(Category $category, CategoryFormRequest $request)
    {
        $category->fill($request->all());
        $category->save();
        return to_route('categories.index')
            ->with('message.success', "Categoria '{$category->name}' atualizada com sucesso!");
    }

    public function destroy(Category $category, Request $request)
    {
        $category->delete();
        return to_route('categories.index')
            ->with('message.success', "Categoria '{$category->name}' removida com sucesso!");
    }
}
