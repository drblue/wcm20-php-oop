@extends('layouts/app')

@section('content')
	<div class="d-flex justify-content-between">
		<h1 class="mb-4">Articles</h1>
		<div class="actions">
			@auth
				<a href="{{ route('articles.create') }}" class="btn btn-success">Create new article</a>
			@endauth
		</div>
	</div>

	@foreach($articles as $article)
		<article class="card">
			<div class="card-body">
				<h2 class="card-title h5"><a href="{{ route('articles.show', ['article' => $article->slug]) }}">{{ $article->title }}</a></h2>
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
						<li class="list-inline-item">
							Tags:
							{!!
								$article->tags->map(
									function($tag) {
										return '<a href="/articles/tags/' . $tag->id . '">' . $tag->name . '</a>';
									}
								)->implode(", ")
							!!}
						</li>
					</ul>
				</div>

				<p class="excerpt">
					@if(empty($article->excerpt))
						{{ substr($article->content, 0, 100) }}...
					@else
						{{ $article->excerpt }}
					@endif
				</p>

				<div class="actions">
					<a href="{{ route('articles.show', ['article' => $article->slug]) }}" class="btn btn-primary">Read more &raquo;</a>
					@auth
						@if(Illuminate\Support\Facades\Auth::user()->id === $article->author->id)
							<a href="{{ route('articles.edit', ['article' => $article->slug]) }}" class="btn btn-warning">Edit article</a>
						@endif
					@endauth
				</div>
			</div>
		</article>
	@endforeach

	<nav class="pagination-wrapper" aria-label="Article pagination links">
		{{ $articles->onEachSide(2)->links() }}
	</nav>

	@auth
		<div class="mt-4">
			<a href="/articles/create" class="btn btn-primary">Create a new Article</a>
		</div>
	@endauth
@endsection
