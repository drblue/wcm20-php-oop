@extends('layouts/app')

@section('content')
	<strong>Here be list of todos to do. LOL.</strong>

	@if(count($todos) > 0)
		<ul>
			@foreach($todos as $todo)
				<li>{{ $todo }}</li>
			@endforeach
		</ul>
	@else
		<p>There are no todos.</p>
	@endif

@endsection
