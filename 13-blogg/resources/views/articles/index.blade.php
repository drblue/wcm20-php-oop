@extends('layouts/app')

@section('content')
	<div class="card">
		<div class="card-header">Articles written by you</div>

		<div class="card-body">
			<div class="d-flex justify-content-between mb-2">
				<h5 class="card-title">My Articles</h5>
				<div class="actions">
					<a href="/articles/create" class="btn btn-primary btn-sm">Create a new Article</a>
				</div>
			</div>

			<table class="table table-striped table-hover table-responsive">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Excerpt</th>
						<th>Content</th>
						<th>Created at</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
						<tr>
							<td>{{ $article->id }}</td>
							<td>{{ $article->title }}</td>
							<td>{{ $article->excerpt }}</td>
							<td>{{ $article->content }}</td>
							<td>{{ $article->created_at }}</td>
							<td>
								<div class="d-flex">
									<a href="/articles/{{ $article->id }}" class="btn btn-primary btn-sm me-1">View</a>
									<a href="/articles/{{ $article->id }}/edit" class="btn btn-warning btn-sm me-1">Edit</a>
									<form action="/articles/{{ $article->id }}" method="POST">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger btn-sm">Delete</button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection
