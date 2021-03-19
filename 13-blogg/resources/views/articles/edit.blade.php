@extends('layouts/app')

@section('content')
	<h1>Edit an Article</h1>

	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Edit Article</h5>

			<form class="form" action="{{ route('articles.update', ['article' => $article]) }}" method="POST">
				@csrf
				@method('PUT')

				<div class="mb-3">
					<label for="title" class="form-label">Title</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="Enter the title of your article" value="{{ $article->title }}" required>
				</div>

				<div class="mb-3">
					<label for="excerpt" class="form-label">Excerpt</label>
					<textarea id="excerpt" name="excerpt" class="form-control">{{ $article->excerpt }}</textarea>
				</div>

				<div class="mb-3">
					<label for="content" class="form-label">Content</label>
					<textarea id="content" name="content" class="form-control" rows="10">{{ $article->content }}</textarea>
				</div>

				<button type="submit" class="btn btn-success w-100">Update</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('articles.show', ['article' => $article]) }}" class="btn btn-secondary">&laquo; Back to article</a>
	</div>
@endsection
