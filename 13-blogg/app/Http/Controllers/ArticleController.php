<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('articles/index', [
			'articles' => Article::all(),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		abort_unless(Auth::check(), 401, 'You have to be logged in to create an article.');

		return view('articles/create', [
			'tags' => Tag::orderBy('name')->get(),
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// bail if no user is logged in
		abort_unless(Auth::check(), 401, 'You have to be logged in to create an article.');

		// fail validation if no title is set
		if (!$request->filled('title')) {
			return redirect()->back()->with('warning', 'Please enter a title for the article.');
		}

		// create article with authenticated user as author
		$article = Auth::user()->articles()->create([
			'title' => $request->input('title'),
			'excerpt' => $request->input('excerpt'),
			'content' => $request->input('content'),
		]);

		// attach selected tags to article
		$article->tags()->attach($request->input('tag'));

		// redirect user to the newly created article
		return redirect()->route('articles.show', ['article' => $article]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function show(Article $article)
	{
		return view('articles/show', ['article' => $article]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Article $article)
	{
		abort_unless(Auth::check() && Auth::user()->id === $article->author->id, 401, 'You have to be logged in as the author to edit this article.');

		return view('articles/edit', ['article' => $article]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Article $article)
	{
		abort_unless(Auth::check() && Auth::user()->id === $article->author->id, 401, 'You have to be logged in as the author to edit this article.');

		if (!$request->filled('title')) {
			return redirect()->back()->with('warning', 'Please enter a title for the article.');
		}

		$article->update([
			'title' => $request->input('title'),
			'excerpt' => $request->input('excerpt'),
			'content' => $request->input('content'),
		]);

		return redirect()->route('articles.show', ['article' => $article])->with('success', 'Article updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Article $article)
	{
		abort_unless(Auth::check() && Auth::user()->id === $article->author->id, 401, 'You have to be logged in as the author to delete this article.');

		$article->tags()->sync([]);

		$article->delete();

		return redirect()->route('articles.index')->with('success', 'Article has been deleted');
	}
}
