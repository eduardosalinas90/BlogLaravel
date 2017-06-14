<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',['uses'=>'FrontController@index','as'=>'front.index']);
Route::get('/articles/categories/{name}',[
    'uses'=>'FrontController@categories',
    'as'=>'front.search.categories'
    ]);

Route::get('/articles/tags/{name}',[
    'uses'=>'FrontController@tags',
    'as'=>'front.search.tags'
    ]);

Route::get('/article/{slug}/',[
    'uses'=>'FrontController@viewArticle',
    'as'=>'front.view.article'
    ]);



Route::group(['prefix'=>'admin'], function () {

     Route::resource('users','UsersController');
     Route::get('/',['as'=>'admin.index', function () {

        if(!Auth::user()){

            return view('auth.login');
        }
        return view('welcome');
}]);
    Route::get('users/{id}/destroy',['uses'=>'UsersController@destroy', 'as'=>'admin.users.destroy']);

    Route::resource('categories','CategoriesController');
    Route::get('categories/{id}/destroy',['uses'=>'CategoriesController@destroy', 'as'=>'admin.categories.destroy']);

    Route::resource('tags','TagsController');
    Route::get('tags/{id}/destroy',['uses'=>'TagsController@destroy', 'as'=>'admin.tags.destroy']);

    Route::resource('articles','ArticlesController');

    Route::get('articles/{id}/destroy',['uses'=>'ArticlesController@destroy', 'as'=>'admin.articles.destroy']);

    Route::get('images',[
        'uses'=>'ImagesController@index',
        'as'=>'admin.images.index'
    ]);

});

Route::auth();
Route::get('/admin/auth/login', ['uses'=>'Auth\AuthController@getshowLoginForm', 'as'=>'admin.auth.login']);
Route::post('/admin/auth/login', ['uses'=>'Auth\AuthController@postLogin', 'as'=>'admin.auth.login']);
Route::get('/admin/auth/dashboard', 'HomeController@index');
Route::get('admi/auth/logout',['uses'=>'Auth\AuthController@logout', 'as'=>'admin.auth.logout']);
