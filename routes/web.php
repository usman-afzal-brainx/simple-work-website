<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('simplewelcome');
});

Route::get('/about', function () {
    $articles = App\Models\Article::latest()->get();
    return view('about', [
        'articles' => $articles,
    ]);
})->name('about');

Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::post('articles', 'ArticlesController@store');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{article}', 'ArticlesController@show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
Route::put('articles/{articles}', 'ArticlesController@update');
