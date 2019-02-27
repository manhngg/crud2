<?php

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
// Route::resource('articles', 'ArticleController');
Route::get('/articles', 'ArticleController@index')->name('articles_path');
Route::post('/articles', 'ArticleController@create')->name('articles_path');
Route::get('/articles/new', 'ArticleController@new')->name('new_article_path');
Route::get('/articles/{id}/edit', 'ArticleController@edit')->name('edit_article_path');
Route::get('/articles/{id}', 'ArticleController@show')->name('article_path');
Route::patch('/articles/{id}', 'ArticleController@update')->name('article_path');
Route::put('/articles/{id}', 'ArticleController@update')->name('article_path');
Route::delete('/articles/{id}', 'ArticleController@destroy')->name('article_path');
// Route::delete('/articles/{id}', ['as' => 'article_path', 'uses' => 'ArticleController@destroy']);

Route::get('/', 'ArticleController@index');

Route::get('/articles/{article_id}/comments', 'CommentController@index')->name('article_comments_path');
Route::post('/articles/{article_id}/comments', 'CommentController@create')->name('article_comments_path');
Route::get('/articles/{article_id}/comments/new', 'CommentController@new')->name('new_article_comment_path');
Route::get('/articles/{article_id}/comments/{id}/edit', 'CommentController@edit')->name('edit_article_comment_path');
Route::get('/articles/{article_id}/comments/{id}', 'CommentController@show')->name('article_comment_path');
Route::patch('/articles/{article_id}/comments/{id}', 'CommentController@update')->name('article_comment_path');
Route::put('/articles/{article_id}/comments/{id}', 'CommentController@update')->name('article_comment_path');
Route::delete('/articles/{article_id}/comments/{id}', 'CommentController@destroy')->name('article_comment_path');
