<?php

namespace App\Http\Controllers;

use App\Http\Requests\GoalFormRequest;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Task;

class GoalController extends Controller
{
    public function create(Category $category)
    {
        return view('goals.create')->with('category', $category);
    }

    public function store(GoalFormRequest $request, Category $category)
    {
        $data = $request->all();
        $data['category_id'] = $category->id;
        $goal = Goal::create($data);

        $tasks = $data['tasks'];
        $content = [];

        foreach ($tasks as $task) {
            $content[] = [
                'goal_id' => $goal->id,
                'name' => $task['name'],
                'checked' => $task['checked']
            ];
        }

        Task::insert($content);

        return to_route('categories.show', $category->id)
            ->with('message.success', "Novo objetivo adicionado com sucesso!");
    }

    public function show(Category $category, Goal $goal)
    {
        $message = session('message.success');

        return view('goals.show', [$category->id, $goal->id])
            ->with('category', $category)->with('goal', $goal)->with('message', $message);
    }

    public function edit(Category $category, Goal $goal)
    {
        return view('goals.edit')->with('category', $category)->with('goal', $goal);
    }

    public function update(GoalFormRequest $request, Category $category, Goal $goal)
    {
        $data = $request->all();
        $goal->fill($data);
        $goal->save();

        $tasks = $data['tasks'];
        $content = [];

        foreach ($tasks as $task) {
            $content[] = [
                'goal_id' => $goal->id,
                'description' => $task,
                'checked' => false
            ];
        }

        $goal->tasks()->delete();
        $goal->tasks()->insert($content);

        return to_route('categories.show', $category->id)
            ->with('message.success', "Objetivo '{$goal->name}' atualizado com sucesso!");
    }

    public function destroy(Category $category, Goal $goal)
    {
        $goal->delete();

        return to_route('categories.show', $category->id)
            ->with('message.success', "Objetivo '{$goal->name}' removido com sucesso!");
    }
}
