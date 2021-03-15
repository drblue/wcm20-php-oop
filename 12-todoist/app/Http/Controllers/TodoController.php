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
	 * GET `/projects/{project}/todos/create`
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Project $project)
	{
		return view('todos/create', ['project' => $project]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * POST `/projects/{project}/todos`
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request, Project $project)
	{
		if (!$request->filled('title')) {
			die("Abort abort abort!");
		}

		$todo = $project->todos()->create([
			'title' => $request->input('title'),
			'description' => $request->input('description'),
		]);

		// redirect user to `/projects/{project}`
		return redirect("/projects/{$project->id}");
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
	 * GET `/projects/{project}/todos/{todo}/edit`
	 *
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Project $project, Todo $todo)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * PUT `/projects/{project}/todos/{todo}`
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Project $project, Todo $todo)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * DELETE `/projects/{project}/todos/{todo}`
	 *
	 * @param  \App\Models\Todo  $todo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Project $project, Todo $todo)
	{
		//
	}
}
