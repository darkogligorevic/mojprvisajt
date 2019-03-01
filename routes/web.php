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
Route::get('/', 'PagesController@home');
Route::get('/informacije', 'PagesController@informacije');
Route::get('/kontakti', 'PagesController@kontakti');

/*

  get /projekti (index)
  get /projekti/kreiraj (create)
  post /projekti (store)
  get /projekti/1 (show)
  get /projekti/edituj (edit)
  patch /projekti/1 (update)
  delete /projekti/1 (destroy)

*/
Route::resource('projekti', 'ProjectsController');


// Route::get('/projekti', 'ProjectsController@index');
// Route::get('/projekti/kreiraj', 'ProjectsController@create');
// Route::post('/projekti', 'ProjectsController@store');
// Route::get('/projekti/{projekat}', 'ProjectsController@show');
// Route::get('/projekti/{projekat}/edituj', 'ProjectsController@edit');
// Route::patch('/projekti/{projekat}', 'ProjectsController@update');
// Route::delete('/projekti/{projekat}', 'ProjectsController@destroy');
