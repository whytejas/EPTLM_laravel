<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Auth;


class ArticlesController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit', 'blogAdmin']]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {


        $articles = Article::latest()->get();
        $user = User::class;
        return view('main.blog', compact('user'))->with('articles', $articles);
    }


    public function blogAdmin()
    {


        $articles = Article::latest()->get();

        return view('articles.index')->with('articles', $articles);
    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        $user = User::where('id', $article->user_id)->first();
        return view('articles.show', compact('article', 'user'));

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $tags = Tag::pluck('name', 'id');
        return view('articles.create', compact('tags'));
    }

    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {

        $article = Auth::user()->articles()->create($request->all());
//        $article = Article::create($request->all());
        $article->tags()->attach($request->input(('tag_list')));

        flash()->success('Your article was successfully created!');


        return redirect('articles');
    }

    /**
     * @param $id
     * @return string
     */
    public function edit(Article $article)
    {


            return view('articles.edit', compact('article'));
//        $tags = Tag::pluck('name', 'id');
//        return view('articles.edit', compact('article', 'tags'));



    }


    public function update(ArticleRequest $request, Article $article)
    {


        $article->update($request->all());

//        $article->tags()->sync($request->input(('tag_list')));

        return redirect('articles');

    }



    public function destroy($article){

        $article = Article::where('id', $article->id)->delete();
        return redirect('articles');


    }

}
