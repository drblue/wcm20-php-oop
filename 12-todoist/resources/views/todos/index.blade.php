@extends('layouts/app')

@section('content')
	<strong>Here be list of todos to do. LOL.</strong>

	@if(count($todos) > 0)
		<ul>
			@foreach($todos as $todo)
				<li>
					<a href="/todos/{{ $todo->id }}">
						{{ $todo->title }}
					</a>
					@if($todo->completed)
						<span class="completed">✅</span>
					@endif
				</li>
			@endforeach
		</ul>
	@else
		<p>There are no todos.</p>
	@endif

@endsection
