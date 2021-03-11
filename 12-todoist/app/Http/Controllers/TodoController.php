<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
	public function index() {
		$todos = ['My first todo item', 'My second todo item', 'My third todo item'];
		// $todos = [];

		return view('todos/index', ['todos' => $todos]);
	}
}
