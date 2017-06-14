<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Tag;
use App\Category;
use Carbon\Carbon;

class FrontController extends Controller
{

    public function __construct(){
        Carbon::setLocale('es');
    }
    public function index(){

        $articles = Article::orderBy('title','DESC')->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('front.index')->with('articles',$articles);
    }

    public function categories($name){

        $category = Category::SearchCategory($name)->first();
        $articles = $category->articles()->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('front.index')->with('articles',$articles);
    }

    public function tags($name){

        $tag = Tag::search($name)->first();
        $articles = $tag->articles()->paginate(5);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });

        return view('front.index')->with('articles',$articles);
    }

    public function viewArticle($slug){

        $article = Article::findBySlugOrFail($slug);
        $article->category;
        $article->user;
        $article->tags;
        $article->images;


        return view('front.article')->with('article',$article);
    }
}
