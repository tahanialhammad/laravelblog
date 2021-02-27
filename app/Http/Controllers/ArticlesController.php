<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
           // return $articles;  //returm json article with this tag
        }else{
              //Render a list of a resource
             $articles = Article::latest()->get();
        }

        return view('articles.index',['articles'=>$articles]);
    }

    public function show(Article $article) //now we ask for an $article=this mast be the same name in wildcard in router/articles/{article} , oud was $id
    {
        //Show a single resource
        // dd($id);
        //$article = Article::findorFail($id); //oud
       // return $article; //return jeson
       //what automatic doe in the new method is: Article::where('id', 1)->first()

        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
       // $tags= Tag::all();
        //Show a view to create a new resource
        return view('articles.create',[
            'tags' => Tag::all(),
        ]);
    }

    public function store()
    {
        //Persist the new resource
        //die('hale store');
        //dd(request()->all());
        //longe way to save record
        //serverside validation
        // $validatedAttributes = request()->validate([
        //     'title' =>'required',
        //     'excerpt' =>'required',
        //     'body' =>'required',
        // ]);
       // return $validatedAttributes;  //test return arry of input value
       //old
       // $article =new Article();
        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');
        // $article->save();

        //new way but this need protected varble in article models
        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);
        //newer
        // Article::create($validatedAttributes);
        // return redirect('/articles');
        //inline
        // Article::create( request()->validate([
        //     'title' =>'required',
        //     'excerpt' =>'required',
        //     'body' =>'required',
        // ]));
          //refrence function
        //Article::create($this->validateArticle());
        //temperry user id
        // $article = new Article($this->validateArticle());
        $article = new Article($this->validateArticle(['title', 'excerpt', 'body'])); //more secure
        // $article->user_id = 1; // auth()->id()
        $article->user_id = auth()->id();
        $article->save();


        //attech or ditach tag
       //tags [1,2,3]
       $article->tags()->attach(request('tags'));
        // return redirect('/articles');
        return redirect(route('articles.index'));

    }

    public function edit(Article $article) //oud was $id
    {
        //Show a view to edit an existing resource
        //fined article associated with the id
        //$article = Article::find($id);  //oud
        // ['article'=>$article] = compact('article')

        //autherze that the cuurent user have permision to upadate article
        $this->authorize('update-article', $article);
        // return view('articles.edit', compact('article'));
        return view('articles.edit', [
            'article'=>$article,
            'tags' => Tag::all(),
        ]);
    }

    public function update(Article $article) //oud was $id
    {
        //Persist the edited resource //old
        // request()->validate([
        //     'title' =>'required',
        //     'excerpt' =>'required',
        //     'body' =>'required',
        // ]);
         //fined article associated with the id
        // $article = Article::find($id);  //oud
        //old
        //  $article->title = request('title');
        //  $article->excerpt = request('excerpt');
        //  $article->body = request('body');
        //  $article->save();

        //inline
        // $article->update(request()->validate([
        //     'title' =>'required',
        //     'excerpt' =>'required',
        //     'body' =>'required',
        // ]));
        //refrence function
        $article->update($this->validateArticle());
        // return redirect('/articles/' . $article->id);
        // return redirect(route('articles.show', $article));
        //$article->tags()->attach(request('tags'));//test update tag , not update only add
        return redirect($article->path());
    }
//to reduce rrepeting validatedAttributes in creat and update we save it in a protected function
    protected function validateArticle()
    {
        return request()->validate([
            'title' =>'required',
            'excerpt' =>'required',
            'body' =>'required',
            //not work 'tags' => 'exists:tags,id',
        ]);
    }
    public function destroy()
    {
        //Delete the resource
    }
}
