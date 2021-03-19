@extends('layouts/app')

@section('content')
	<h1>Article</h1>

	<article class="card single-article">
		<div class="card-body">
			<h5 class="card-title">{{ $article->title }}</h5>
			<div class="metadata">
				<ul class="list-inline">
					<li class="list-inline-item">Date: {{ $article->created_at }}</li>
					<li class="list-inline-item">Author: {{ $article->author->name }}</li>
				</ul>
			</div>

			<div class="excerpt">
				@if($article->excerpt)
					<p>{{ $article->excerpt }}</p>
				@endif
			</div>

			<div class="content">
				<p>{{ str_replace('\n', '<br>', $article->content) }}</p>
			</div>

			<!-- check if someone is logged in, and if so, check if the authenticated user is the same as the articles author -->
			@auth
				@if(Illuminate\Support\Facades\Auth::user()->id === $article->author->id)
					<div class="actions">
						<a href="{{ route('articles.create') }}" class="btn btn-success">Create new article</a>
						<a href="{{ route('articles.edit', ['article' => $article]) }}" class="btn btn-warning">Edit article</a>

						<form action="{{ route('articles.destroy', ['article' => $article]) }}" method="POST">
							@csrf
							@method('DELETE')

							<button type="submit" class="btn btn-danger">Delete article</button>
						</form>
					</div>
				@endif
			@endauth
		</div>
	</article>

	<div class="mt-4">
		<a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to all articles</a>
	</div>
@endsection
