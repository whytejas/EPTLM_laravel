<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Tag;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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



        $articles = Article::latest()->paginate(1);
        $user = User::class;
        return view('main.blog', compact('user'))->with('articles', $articles);
    }


    public function blogAdmin()
    {

        $user_name = Auth::user()->username;
        session(['user_name' => $user_name]);
        $value = session()->get('user_name');

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
     * @param $article
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {

        $this->imageStorage($request);


        $article = Auth::user()->articles()->create($request->all());
        $article->filename = $request->filename;
        $article->save();


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

        $this->imageStorage($request);

        $article->update($request->all());
        $article->filename = $request->filename;
        $article->save();

//        $article->tags()->sync($request->input(('tag_list')));

        return redirect('articles');

    }



    public function destroy($article){

        $article = Article::where('id', $article->id)->delete();
        return redirect('articles');


    }

    /**
     * @param ArticleRequest $request
     */
    public function imageStorage(ArticleRequest $request){
        if ($request->hasFile('Image')) {
            //get image file.
            $image = $request->Image;
            //get just extension.
            $ext = $image->getClientOriginalExtension();
            $original_filename = $image->getClientOriginalName();
            //make a unique name
            $filename = $original_filename;
            $request->filename = $filename;
            //upload the image
//            $image->storeAs('pics', $filename);
            $image->storeAs('images', $original_filename, 'public');
//
        }
    }

}
