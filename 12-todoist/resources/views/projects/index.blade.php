@extends('layouts/app')

@section('content')
	<h1>Projects</h1>

	<table class="table table-striped table-hover table-responsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Todos</th>
				<th>Created at</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($projects as $project)
				<tr>
					<td>{{ $project->id }}</td>
					<td>{{ $project->name }}</td>
					<td>{{ $project->todos()->count() }}</td>
					<td>{{ $project->created_at }}</td>
					<td>
						<div class="d-flex">
							<a href="/projects/{{ $project->id }}" class="btn btn-primary btn-sm me-1">View</a>
							<a href="/projects/{{ $project->id }}/edit" class="btn btn-warning btn-sm me-1">Edit</a>
							<form action="/projects/{{ $project->id }}" method="POST">
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
		<a href="/projects/create" class="btn btn-primary">Create a new Project</a>
	</div>
@endsection
