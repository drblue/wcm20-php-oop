<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$todos = ['My first todo item', 'My second todo item', 'My third todo item'];
		// $todos = [];

		return view('todos/index', ['todos' => $todos]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		return view('todos/show', ['todo' => "This is a single todo with ID {$id}."]);
	}
}
