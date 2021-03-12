<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$todos = Todo::all();

		return view('todos/index', ['todos' => $todos]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$todo = Todo::findOrFail($id);

		return view('todos/show', ['todo' => $todo]);
	}
}
