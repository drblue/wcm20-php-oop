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
						<a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm">View</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/projects" class="btn btn-secondary">&laquo; Back</a>
@endsection
