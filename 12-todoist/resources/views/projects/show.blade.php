@extends('layouts/app')

@section('content')
	<h1 class="mb-3">{{ $project->name }}</h1>

	<h2 class="h5">Todos</h2>
	<p class="text-muted">Here will be a list of todos for this project.</p>

	<a href="/projects" class="btn btn-secondary">&laquo; Back</a>
@endsection
