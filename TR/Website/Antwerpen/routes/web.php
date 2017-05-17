<?php

use Illuminate\Http\Request;

// Routes
Auth::routes();

// ALGEMENE LINKS
Route::get('/ontdek', 'OntdekController@index');
Route::get('/info', 'InfoController@index');
Route::get('/nieuws', 'nieuwsController@index');
Route::get('/info/studieaanbod', 'InfoController@indexRichting');


// ----------------------- HOME -----------------------
  // HOME & INDEX
    // Home controllers
    Route::get('/', 'ArticleController@index');
    Route::get('/home', 'ArticleController@index');

// ----------------------- NIEUWS -----------------------
  // INDEX ADD
  Route::get('/nieuws/add', 'nieuwsController@AddIndex');
  // ADD
  Route::post('/nieuws/add/nieuw', 'nieuwsController@create');
  // EDIT
  Route::get('nieuws/edit/{id}', 'nieuwsController@edit');
  // UPDATE
  Route::post('nieuws/edit/{id}', 'nieuwsController@update');
  // DELETE
  Route::post('/nieuws/delete/{id}', 'nieuwsController@delete');
  Route::get('/nieuws/delete/{id}', 'nieuwsController@delete');
  // INDIVIDUEEL ARTIKEL
  Route::get('/nieuws/artikel', 'nieuwsController@ArtikelIndex');

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
  // EDIT nieuws/event
  // Route::get('nieuws/edit/{id}', function () { // view
  //   return view('nieuws/nieuws');
  // });
  Route::get('/nieuws/edit/{id}', 'nieuwsController@edit');
  // DELETE nieuws/event
  // Route::post('/nieuws/delete/{id}', 'nieuwsController@delete');






//TESTIMONIAL
Route::get('/testimonial', 'testimonialController@index');


// ADMIN PANEL
Route::get('/admin-panel', function () {
    return view('/admin-panel');
});








//PLACES TO EAT
Route::get('ontdek/eet-plekskes', function () {
    return view('places/placesToEat');
});

// PLACES TO SEE
Route::get('ontdek/schoon-plekskes', function () {
    return view('places/placesToSee');
});

// PLACES TO STUDY
Route::get('ontdek/studie-plekskes', function () {
    return view('places/placesToStudy');
});

Route::post('nieuws/fileupload', 'ArticleController@upload');
