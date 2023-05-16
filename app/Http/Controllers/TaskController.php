<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function update(Request $request, Category $category, Goal $goal, Task $task)
    {
        $task->checked = $request->has('checked');
        $task->save();

        return to_route('categories.goals.show', [$category->id, $goal->id]);
    }

    public function destroy(Category $category, Goal $goal, Task $task)
    {
        $task->delete();

        return to_route('categories.goals.show', [$category->id, $goal->id])
            ->with('message.success', "Tarefa '{$task->name}' removida com sucesso!");
    }
}
