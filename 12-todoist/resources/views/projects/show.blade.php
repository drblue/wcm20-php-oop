@extends('layouts/app')

@section('content')
	<h1 class="mb-3">{{ $project->name }}</h1>

	<h2>Todos</h2>
	<table class="table table-striped table-hover table-responsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Completed?</th>
				<th>Created at</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($project->todos as $todo)
				<tr>
					<td>{{ $todo->id }}</td>
					<td>{{ $todo->title }}</td>
					<td>{{ $todo->completed }}</td>
					<td>{{ $todo->created_at }}</td>
					<td>
						<div class="d-flex">
							<a href="/projects/{{ $project->id }}/todos/{{ $todo->id }}" class="btn btn-primary btn-sm me-1">View</a>
							<a href="/projects/{{ $project->id }}/todos/{{ $todo->id }}/edit" class="btn btn-warning btn-sm me-1">Edit</a>
							<form action="/projects/{{ $project->id }}/todos/{{ $todo->id }}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
							</form>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="mt-3">
		<a href="/projects/{{ $project->id }}/todos/create" class="btn btn-primary">Create a new Todo</a>
	</div>

	<div class="mt-5">
		<a href="/projects" class="btn btn-secondary">&laquo; Back</a>
	</div>
@endsection
