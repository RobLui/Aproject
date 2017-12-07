<?php

// Routes
Auth::routes();

// ALGEMENE LINKS
Route::get('/ontdek', 'OntdekController@index');
Route::get('/info', 'InfoController@index');
Route::get('/nieuws', 'NieuwsController@index');
Route::get('/info/studieaanbod', 'InfoController@indexRichting');

// ----------------------- HOME -----------------------
  // HOME & INDEX - home controllers
  Route::get('/', 'ArticleController@index');
  Route::get('/home', 'ArticleController@index');

// ----------------------- NIEUWS -----------------------
  // INDEX ADD
  Route::get('/nieuws/add', 'NieuwsController@AddIndex');
  // ADD
  Route::post('/nieuws/add/nieuw', 'NieuwsController@create');
  // EDIT
  Route::get('nieuws/edit/{id}', 'NieuwsController@edit');
  // UPDATE
  Route::post('nieuws/edit/{id}', 'NieuwsController@update');
  // DELETE
  Route::post('/nieuws/delete/{id}', 'NieuwsController@delete');
  Route::get('/nieuws/delete/{id}', 'NieuwsController@delete');
  // INDIVIDUEEL ARTIKEL
  Route::get('/nieuws/artikel/{id}', 'NieuwsController@ArtikelIndex');

// ----------------------- RICHTINGEN  -----------------------
  // CREATE
  Route::post('info/studieaanbod/add', 'InfoController@create');
  // EDIT
  Route::get('/info/studieaanbod/edit/{id}', 'InfoController@edit');
  // UPDATE
  Route::post('/info/studieaanbod/edit/{id}', 'InfoController@update');
  // DELETE
  Route::get('/info/studieaanbod/delete/{id}', 'InfoController@delete');

// NIEUWS / EVENTS
  Route::get('/nieuws/edit/{id}', 'NieuwsController@edit');

// ----------------------- PLACES  -----------------------
  //PLACES TO EAT
  Route::get('ontdek/eet-plekskes', function () {
      return view('places/placesToEat');
  });
  // PLACES TO SEE
  Route::get('ontdek/toffe-plekskes', function () {
      return view('places/placesToSee');
  });
  // PLACES TO STUDY
  Route::get('ontdek/studie-plekskes', function () {
      return view('places/placesToStudy');
  });

Route::post('nieuws/fileupload', 'ArticleController@upload');

// ADMIN APPROVAL
Route::get('/approval', 'AllowController@index');

Route::get('/admin-panel', 'AdminController@index');

