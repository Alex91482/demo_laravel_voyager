<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Models\Journal;
use Illuminate\Support\Facades\DB;


Route::get('/', function(){
    return view('layouts.index');
});

Route::get('/journal', function(){
    $journals = Journal::orderBy('date_of_wirting', 'asc')->get();
    return view('books-task', ['journals' => $journals]);
});

Route::get('/articles', function(){
    $articles = Article::orderBy('create_date', 'asc')->get();
    
    return view('articles-task', ['articles' => $articles]);
});

Route::get('/articles/{id}', function($id){
    if(is_numeric($id)){
        $article = DB::table('articles')->where('id', $id)->first();
        return view('article-task', ['article' => $article]);       
    }else{
        return view('layouts.index');
    }
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});