<?php

use Illuminate\Http\Request;

// Simple article view, no need for controller right now
Route::get('/article/add', function () {
    return view('articles/add');
});

Route::get('/nieuws/add', function () {
  return view('nieuws/nieuws');
});

Route::get('/ontdek', 'OntdekController@index');
Route::get('/info', 'InfoController@index');
Route::get('/nieuws', 'nieuwsController@index');
Route::get('/contact', 'ContactController@index');
Route::get('info/studieaanbod', 'InfoController@indexRichting');


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
  // CREATE richting
  Route::post('/info/studieaanbod/add', 'Infocontroller@create');
  // EDIT richting
  Route::get('/info/studieaanbod/edit/{id}', 'InfoController@edit');
  // UPDATE richting
  Route::post('/info/studieaanbod/edit/{id}', 'InfoController@update');
  // DELETE richting
  Route::get('/info/studieaanbod/delete/{id}', 'InfoController@delete');


// NIEUWS/EVENTS
  // CREATE nieuws
  Route::post('/nieuws/add', 'nieuwsController@create');
  // EDIT nieuws/event
  Route::get('niews/edit/{id}', function () { // view
    return view('nieuws/nieuws');
  });
  // DELETE nieuws/event
  Route::post('/nieuws/delete/{id}', 'nieuwsController@delete');
