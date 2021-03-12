<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return redirect('/todos');
});

use App\Http\Controllers\TodoController;
Route::get('/todos', [TodoController::class, 'index']);
Route::get('/todos/{todo}', [TodoController::class, 'show']);

use App\Http\Controllers\ProjectController;
/*
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/create', [ProjectController::class, 'create']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::get('/projects/{project}', [ProjectController::class, 'show']);
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit']);
Route::put('/projects/{project}', [ProjectController::class, 'update']);
Route::delete('/projects/{project}', [ProjectController::class, 'destroy']);
*/
Route::resource('/projects', ProjectController::class);
