<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Category $category, Goal $goal)
    {
        $message = session('message.success');
        return view('tasks.index', [$category->id, $goal->id])->with('category', $category)->with('goal', $goal)->with('message', $message);
    }

    public function create(Category $category, Goal $goal)
    {
        return view('tasks.create')->with('category', $category)->with('goal', $goal);
    }

    public function store(TaskFormRequest $request, Category $category, Goal $goal)
    {
        $data = $request->all();
        $data['goal_id'] = $goal->id;
        $data['checked'] = false;
        $task = Task::create($data);
        return to_route('categories.goals.tasks.index', [$category->id, $goal->id])->with('message.success', "Tarefa '{$task->name}' adicionada com sucesso!");
    }

    public function update(Category $category, Goal $goal, Task $task, Request $request)
    {
        $task->checked = $request->has('checked');
        $task->save();
        return to_route('categories.goals.tasks.index', [$category->id, $goal->id]);
    }

    public function edit(){}
    
    public function show(){}

    public function destroy(){}
}
