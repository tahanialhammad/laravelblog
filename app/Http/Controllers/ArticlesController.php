<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index',['articles'=>$articles]);
    }

    public function show(Article $article)
    {
        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        //Show a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());
        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) //oud was $id
    {
        $article->update($this->validateArticle());
        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' =>'required',
            'excerpt' =>'required',
            'body' =>'required',
        ]);
    }

    public function destroy()
    {
        //Delete the resource
    }

}
