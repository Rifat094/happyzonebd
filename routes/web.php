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


Auth::routes();

Route::get('/', function () {
    return view('posts.index');
});
Route::get('/additem', function () {
    return view('additem');
});
//Route::get('/p/index' , 'PostsController@index');
Route::resource('posts','PostsController');
Route::get('/p/create','PostsController@create');
Route::get('/p/delete','PostsController@delete');
Route::post('/p','PostsController@store');
Route::post('/p/destroy','PostsController@destroy')-> name('remove');
Route::get('/p/{post}' , 'PostsController@show');
Route::get('/search' , 'PostsController@search')->name('search');




Route::get('/home', 'HomeController@index')->name('home');
