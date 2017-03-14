<?php

use Illuminate\Http\Request;

// Simple article view, no need for controller right now
Route::get('/article/add', function () {
    return view('articles/add');
});

Route::get('/ontdek', 'OntdekController@index');
Route::get('/info', 'InfoController@index');
Route::get('/nieuws', 'nieuwsController@index');
Route::get('/contact', 'ContactController@index');

Auth::routes();

// HOME & INDEX
  // Article controller showing articles @ index
  Route::get('/', 'ArticleController@index');
  // Home controller showing articles @ home
  Route::get('/home', 'ArticleController@index');

// ARTICLES -------- ELOQUENT METHODS ----- PASCAL's REQUEST :-)
  // SHOW EDIT view
  Route::get('article/edit/{id}', 'ArticleController@edit');
  // ADD article
  Route::post('/article/add', 'ArticleController@create');
  // UPDATE article
  Route::post('article/edit/{id}', 'ArticleController@update');
  // DELETE articles
  Route::post('/article/delete/{id}', 'ArticleControlsler@delete');
  Route::get('/article/delete/{id}', 'ArticleController@delete');

// COMMENTS
  // SHOW COMMENT view
  Route::get('/comments/{id}', 'CommentsController@index');
  // ADD comments
  Route::post('/comments/add/{id}', 'CommentsController@create');
  // EDIT comments
  Route::get('/comments/edit/{id}', 'CommentsController@edit');
  Route::post('/comments/edit/{id}', 'CommentsController@update');
  // DELETE comments
  Route::get('/comments/delete/{id}', 'CommentsController@delete');

// RICHTINGEN
  Route::post('/richtingen/add', 'Infocontroller@create'); // CREATE
  Route::get('richtingen/edit/{id}', 'InfoController@edit'); // EDIT
  Route::post('/richtingen/edit/{id}', 'InfoController@update'); // UPDATE
