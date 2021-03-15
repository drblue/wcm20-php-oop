@extends('layouts/app')

@section('content')
	<h1>Create a new Todo</h1>
	<h2 class="mb-3">{{ $project->name }}</h1>

	<form class="form" action="/projects/{{ $project->id }}/todos" method="POST">
		@csrf

		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" id="title" name="title" class="form-control" placeholder="Enter title of todo" required>
		</div>

		<div class="mb-3">
			<label for="description" class="form-label">Description</label>
			<textarea id="description" name="description" class="form-control"></textarea>
		</div>

		<button type="submit" class="btn btn-success w-100">Create</button>
	</form>

	<div class="mt-5">
		<a href="/projects/{{ $project->id }}" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
