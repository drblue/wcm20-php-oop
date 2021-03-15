@extends('layouts/app')

@section('content')
	<h1 class="mb-3">Create a new Project</h1>

	<form class="form" action="/projects" method="POST">
		@csrf

		<div class="mb-3">
			<label for="project_name" class="form-label">Name of Project</label>
			<input type="text" id="project_name" name="project_name" class="form-control" placeholder="Enter name of project" required>
		</div>

		<button type="submit" class="btn btn-success w-100">Create</button>
	</form>

	<div class="mt-5">
		<a href="/projects" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
