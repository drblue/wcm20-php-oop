@extends('layouts/app')

@section('content')
	<h1 class="mb-3">{{ $todo->title }}</h1>
	<div class="meta mb-3">
		<h2 class="h6">Status</h2>
		@if($todo->completed)
			Completed 🥳
		@else
			Still needs doing 😰
		@endif
	</div>

	@if($todo->description)
		<h2 class="h5">Description</h2>
		<p>{{ $todo->description }}</p>
	@endif

	<a href="/" class="btn btn-secondary">&laquo; Back</a>
@endsection
