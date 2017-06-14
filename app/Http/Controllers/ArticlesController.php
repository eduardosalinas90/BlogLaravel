<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticlesUpdateRequest;


class ArticlesController extends Controller
{


    public function __construct(){

        $this->middleware('auth');
    }

    public function index(Request $request){

        $articles = Article::search($request->title)->orderBy('id','DESC')->paginate(5);
        $articles->each(function($articles){

            $articles->category;
            $articles->user;
        });


        return view('admin.articles.index')->with('articles',$articles);
    }


    public function store(ArticleRequest $request){

        if($request->file('file')){

        $file = $request->file('file');
        $name = 'blogEduardo_'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path('/img/articles/');
        $file->move($path,$name);
        }

        $article = new Article($request->all());
        $article->user_id = Auth::id();
        // $article->category_id = $request->id_category;
        $article->save();

        $article->tags()->sync($request->id_tags);

        $image = new Image($request->all());
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        flash('Articulo guardado satisfactoriamente')->success();

        return view('admin.articles.index');

    }

     public function create(){

        $categories = Category::orderBy('name','ASC')->lists('name','id');
        $tags = Tag::orderBy('name','ASC')->lists('name','id');
       return view('admin.articles.create')->with('categories',$categories)->with('tags',$tags);
    }


    public function edit($id){

        $article = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name','DESC')->lists('name','id');
        $tags = Tag::orderBy('name','DESC')->lists('name','id');
        $my_tag = $article->tags->lists('id')->ToArray();

        return view('admin.articles.edit')
        ->with('article',$article)
        ->with('categories',$categories)
        ->with('tags',$tags)
        ->with('my_tags', $my_tag);
    }

    public function update(ArticlesUpdateRequest $request,$id){

          $article = Article::find($id);
          $article->fill($request->all());
          $article->save();
          $article->tags()->sync($request->id_tags);
          flash('Articulo '.$article->title.' actulizado de forma exitosa')->warning();
          return redirect()->route('admin.articles.index');
    }

    public function destroy($id){

        $article = Article::find($id);
        $article->delete();
        flash('Articulo '.$article->title.' eliminado de forma exitosa')->warning();
        return redirect()->route('admin.articles.index');

    }


}

