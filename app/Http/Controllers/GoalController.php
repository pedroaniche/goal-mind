<?php

namespace App\Http\Controllers;

use App\Http\Requests\GoalFormRequest;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Task;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;


class GoalController extends Controller
{
    protected $rules = [
        'name' => 'required|min:2'
    ];

    public function index(Category $category)
    {
        $message = session('message.success');
        return view('goals.index')->with('category', $category)->with('message', $message);
    }
    public function create(Category $category)
    {
        return view('goals.create')->with('category', $category);
    }

    public function store(GoalFormRequest $request, Category $category)
    {
        //

        $data = $request->all();      
        $data['category_id'] = $category->id;
        $goal = Goal::create($data);
        $tasks = $data['tasks'];
        $content = [];

        foreach ($tasks as $task) {
            $content[] = [
                'goal_id' => $goal->id,
                'name' => $task,
                'checked' => false
            ];
        }
        Task::insert($content);

        return to_route('categories.goals.index', $category->id)
            ->with('message.success', "Objetivo '{$goal->name}' adicionado com sucesso!");
    }

    /* public function show(string $id)
    {
        return view();
    } */

    public function edit(Category $category, Goal $goal)
    {
        return view('goals.edit')->with('category', $category)->with('goal', $goal);
    }

    public function update(GoalFormRequest $request, Category $category, Goal $goal)
    {
        $goal->fill($request->all());
        $goal->save();
        return to_route('categories.goals.index', $category->id)
            ->with('message.success', "Objetivo '{$goal->name}' atualizado com sucesso!");
    }

    public function destroy(Category $category, Goal $goal)
    {
        $goal->delete();
        return to_route('categories.goals.index', $category)
            ->with('message.success', "Objetivo '{$goal->name}' removido com sucesso!");
    }
}

/* $validation = Validator::make($data, $this->rules);

        if ($validation->errors()) {
            dd($validation->errors());
        } */
