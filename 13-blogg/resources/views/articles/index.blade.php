@extends('layouts/app')

@section('content')
	<h1>Articles</h1>

	@foreach($articles as $article)
		<article class="card">
			<div class="card-body">
				<h5 class="card-title"><a href="{{ route('articles.show', ['article' => $article]) }}">{{ $article->title }}</a></h5>
				<div class="metadata">
					<ul class="list-inline">
						<li class="list-inline-item">Date: {{ $article->created_at }}</li>
						<li class="list-inline-item">Author: {{ $article->author->name }}</li>
					</ul>
				</div>

				<p class="excerpt">
					@if(empty($article->excerpt))
						{{ substr($article->content, 0, 100) }}...
					@else
						{{ $article->excerpt }}
					@endif
				</p>

				<a href="{{ route('articles.show', ['article' => $article]) }}" class="btn btn-primary">Read more &raquo;</a>
			</div>
		</article>
	@endforeach

	@auth
		<div class="mt-4">
			<a href="/articles/create" class="btn btn-primary">Create a new Article</a>
		</div>
	@endauth
@endsection
