@extends('layouts/app')

@section('content')
	<h1 class="mb-3">{{ $todo->title }}</h1>

	<div class="meta mb-3">
		<dl class="row">
			<dt class="col-sm-2">Project</dt>
			<dd class="col-sm-10">
				<a href="/projects/{{ $todo->project->id }}">
					{{ $todo->project->name }}
				</a>
			</dd>

			<dt class="col-sm-2">Status</dt>
			<dd class="col-sm-10">
				@if($todo->completed)
					Completed 🥳
				@else
					Still needs doing 😰
				@endif
			</dd>

			<dt class="col-sm-2">Created at</dt>
			<dd class="col-sm-10">
				{{ $todo->created_at }}
			</dd>

			<dt class="col-sm-2">Last updated at</dt>
			<dd class="col-sm-10">
				{{ $todo->updated_at }}
			</dd>

		</dl>
	</div>

	@if($todo->description)
		<h2 class="h5">Description</h2>
		<p>{{ $todo->description }}</p>
	@endif

	<div class="mt-5">
		<a href="/projects/{{ $todo->project->id }}" class="btn btn-secondary">&laquo; Back to the project</a>
	</div>
@endsection
