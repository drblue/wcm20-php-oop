@extends('layouts/app')

@section('content')
	<h1 class="mb-4">Edit an Article</h1>

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

				<div class="mb-3">
					<label for="tags">Tags</label>
					<div class="form-text" id="tagsHelpBlock">(hold down Ctrl/Cmd to select multiple tags)</div>
					<select class="form-select" id="tags" name="tags[]" multiple placeholder="Select tags" aria-describedby="tagsHelpBlock">
						@foreach($tags as $tag)
							<option value="{{ $tag->id }}" @if($article->tags->contains($tag)) selected @endif>{{ $tag->name }}</option>
						@endforeach
					</select>
				</div>

				{{--
				<fieldset class="mb-3">
					<legend>Tags</legend>

					@foreach($tags as $tag)
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="tag_{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}" @if($article->tags->contains($tag)) checked @endif>
							<label class="form-check-label" for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
						</div>
					@endforeach
				</fieldset>
				--}}

				<button type="submit" class="btn btn-success w-100">Update</button>
			</form>
		</div>
	</div>

	<div class="mt-4">
		<a href="{{ route('articles.show', ['article' => $article]) }}" class="btn btn-secondary">&laquo; Back to article</a>
	</div>
@endsection
