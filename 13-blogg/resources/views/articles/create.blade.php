@extends('layouts/app')

@section('content')
	<h1 class="mb-4">Create a new Article</h1>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">New Article</h5>

			<form class="form" action="{{ route('articles.store') }}" method="POST">
				@csrf

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="Enter the title of your article" required>
				</div>

				<div class="mb-3">
					<label for="excerpt" class="form-label">Excerpt</label>
					<textarea id="excerpt" name="excerpt" class="form-control"></textarea>
				</div>

				<div class="mb-3">
					<label for="content" class="form-label">Content</label>
					<textarea id="content" name="content" class="form-control" rows="10"></textarea>
				</div>

				<fieldset class="mb-3">
					<legend>Tags</legend>

					@foreach($tags as $tag)
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="tag_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
							<label class="form-check-label" for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
						</div>
					@endforeach
				</fieldset>

				<button type="submit" class="btn btn-success w-100">Create</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('articles.index') }}" class="btn btn-secondary">&laquo; Back to all articles</a>
	</div>
@endsection
