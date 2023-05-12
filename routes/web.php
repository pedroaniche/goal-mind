<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoalController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return to_route('categories.index');
});

Route::resources([
    'categories' => CategoryController::class,
    'categories.goals' => GoalController::class,
    'categories.goals.tasks' => TaskController::class
]);
