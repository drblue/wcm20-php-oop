<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * GET `/projects/{project}/todos`
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Project $project)
	{
		return view('todos/index', ['todos' => $project->todos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * GET `/projects/{project}/todos/{todo}`
	 *
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Project $project, Todo $todo)
	{
		return view('todos/show', ['project' => $project, 'todo' => $todo]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Todo $todo)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Todo $todo)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Todo $todo)
	{
		//
	}
}
