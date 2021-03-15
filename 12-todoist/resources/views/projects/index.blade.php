@extends('layouts/app')

@section('content')
	<h1>Projects</h1>

	@if(count($projects) > 0)
		<ul>
			@foreach($projects as $project)
				<li>
					<a href="/projects/{{ $project->id }}">
						{{ $project->name }}
					</a>
				</li>
			@endforeach
		</ul>
	@else
		<p>There are no projects.</p>
	@endif

	<a href="/projects/create" class="btn btn-primary">Create a new Project</a>

@endsection
