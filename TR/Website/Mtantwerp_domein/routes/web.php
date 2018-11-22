<?php

// Routes
Auth::routes();

// GENERAL

Route::get('/ontdek', 'OntdekController@index')
    ->name('discover');

Route::get('/info', 'InfoController@index')
    ->name('info');

Route::get('/nieuws', 'NieuwsController@index')
    ->name('news');

Route::get('/info/studieaanbod', 'InfoController@indexRichting')
    ->name('study_offer');

// ----------------------- HOME -----------------------
// HOME & INDEX - home controllers
Route::get('/', 'ArticleController@index')
    ->name('index');

Route::get('/home', 'ArticleController@index')
    ->name('home');

// ----------------------- NIEUWS -----------------------
// INDEX ADD
Route::get('/nieuws/add', 'NieuwsController@AddIndex')
    ->name('news_add');

// ADD
Route::post('/nieuws/add/nieuw', 'NieuwsController@create')
    ->name('news_add_new');

// EDIT
Route::get('nieuws/edit/{id}', 'NieuwsController@edit')
    ->name('news_edit');

// UPDATE
Route::post('nieuws/edit/{id}', 'NieuwsController@update')
    ->name('news_update');

// DELETE
Route::post('/nieuws/delete/{id}', 'NieuwsController@delete')
    ->name('news_post_delete');

Route::get('/nieuws/delete/{id}', 'NieuwsController@delete')
    ->name('news_get_delete');

// INDIVIDUEEL ARTIKEL
Route::get('/nieuws/artikel/{id}', 'NieuwsController@ArtikelIndex')
    ->name('news_article_detail');

// ----------------------- RICHTINGEN  -----------------------
// CREATE
Route::post('info/studieaanbod/add', 'InfoController@create')
    ->name('study_offer_add');

// EDIT
Route::get('/info/studieaanbod/edit/{id}', 'InfoController@edit')
    ->name('study_offer_get_edit');

// UPDATE
Route::post('/info/studieaanbod/edit/{id}', 'InfoController@update')
    ->name('study_offer_post_update');

// DELETE
Route::get('/info/studieaanbod/delete/{id}', 'InfoController@delete')
    ->name('study_offer_get_delete');

// NIEUWS / EVENTS
Route::get('/nieuws/edit/{id}', 'NieuwsController@edit')
    ->name('news_article_edit');


// ----------------------- PLACES  -----------------------
//PLACES TO EAT
Route::get('ontdek/eet-plekskes', function () {
    return view('places/placesToEat');
})->name('discover_eat_places');

// PLACES TO SEE
Route::get('ontdek/toffe-plekskes', function () {
    return view('places/placesToSee');
})->name('discover_fun_places');

// PLACES TO STUDY
Route::get('ontdek/studie-plekskes', function () {
    return view('places/placesToStudy');
})->name('discover_study_places');

Route::post('nieuws/fileupload', 'ArticleController@upload')
    ->name('file_upload');

// ADMIN APPROVAL
Route::get('/approval', 'AllowController@index')
    ->name('approval');

Route::get('/admin-panel', 'AdminController@index')
    ->name('admin_panel');


