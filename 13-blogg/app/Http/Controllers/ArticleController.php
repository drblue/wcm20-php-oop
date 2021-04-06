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
			'articles' => Article::with(['author', 'tags'])->latest()->paginate(10),
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

		// validate request
		$request->validate([
			'title' => 'required|min:5',
			'excerpt' => 'nullable|min:10',
			'content' => 'required',
			'tags' => 'exists:tags,id'
		]);

		// create article with authenticated user as author
		$article = Auth::user()->articles()->create([
			'title' => $request->input('title'),
			'excerpt' => $request->input('excerpt'),
			'content' => $request->input('content'),
		]);

		// attach selected tags to article
		$article->tags()->attach($request->input('tags'));

		// redirect user to the newly created article
		return redirect()->route('articles.show', ['article' => $article->slug]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$article = $this->getArticleBySlug($slug);

		return view('articles/show', ['article' => $article]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function edit($slug)
	{
		$article = $this->getArticleBySlug($slug);

		abort_unless(Auth::check() && Auth::user()->id === $article->author->id, 401, 'You have to be logged in as the author to edit this article.');

		return view('articles/edit', [
			'article' => $article,
			'tags' => Tag::orderBy('name')->get(),
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $slug)
	{
		$article = $this->getArticleBySlug($slug);

		// bail if no user is logged in
		abort_unless(Auth::check() && Auth::user()->id === $article->author->id, 401, 'You have to be logged in as the author to edit this article.');

		// fail validation if no title is set
		if (!$request->filled('title')) {
			return redirect()->back()->with('warning', 'Please enter a title for the article.');
		}

		// update article with form content
		$article->update([
			'title' => $request->input('title'),
			'excerpt' => $request->input('excerpt'),
			'content' => $request->input('content'),
		]);

		// sync selected tags to article (remove those existing but not present
		// in form request, add those not existing but present in form request)
		$article->tags()->sync($request->input('tags'));

		// redirect user to the updated article
		return redirect()->route('articles.show', ['article' => $article->slug])->with('success', 'Article updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Article  $article
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($slug)
	{
		$article = $this->getArticleBySlug($slug);

		abort_unless(Auth::check() && Auth::user()->id === $article->author->id, 401, 'You have to be logged in as the author to delete this article.');

		$article->tags()->sync([]);

		$article->delete();

		return redirect()->route('articles.index')->with('success', 'Article has been deleted');
	}

	public function getArticleBySlug($slug) {
		return Article::where('slug', $slug)->firstOrFail();
	}
}
