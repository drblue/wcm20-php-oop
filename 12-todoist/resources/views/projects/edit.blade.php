@extends('layouts/app')

@section('content')
	<h1>Edit Project</h1>
	<h2 class="mb-3">{{ $project->name }}</h2>

	<form class="form" action="/projects/{{ $project->id }}" method="POST">
		@csrf
		@method('PUT')

		<div class="mb-3">
			<label for="project_name" class="form-label">Name of Project</label>
			<input type="text" id="project_name" name="project_name" class="form-control" placeholder="Enter name of project" required value="{{ $project->name }}">
		</div>

		<button type="submit" class="btn btn-success w-100">Update</button>
	</form>

	<div class="mt-5">
		<a href="/projects" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
