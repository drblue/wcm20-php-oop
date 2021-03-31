@extends('layouts/app')

@section('content')
	<h1 class="mb-4">Article</h1>

	<article class="card single-article">
		<div class="card-body">
			<h2 class="card-title h5">{{ $article->title }}</h2>
			<div class="metadata">
				<ul class="list-inline">
					<li class="list-inline-item">
						Date: <time
							datetime="{{ $article->created_at->toIso8601String() }}"
							title="{{ $article->created_at }}">
								{{ $article->created_at->diffForHumans() }}
						</time>
					</li>
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

			<hr />

			<p>
				<h3 class="h6">Tags:</h3>
				<ul class="list-inline">
					@foreach ($article->tags as $tag)
						<li class="list-inline-item">{{ $tag->name }}</li>
					@endforeach
				</ul>
			</p>

			<!-- check if someone is logged in, and if so, check if the authenticated user is the same as the articles author -->
			@auth
				@if(Illuminate\Support\Facades\Auth::user()->id === $article->author->id)
					<div class="actions">
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
