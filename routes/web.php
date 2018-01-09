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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'WhatsappController@index');

Route::resource('whatsapp', 'WhatsappController');

Route::get('/link/{wa_link}', 'WhatsappController@link');

// Route::get("pelaburan/{project_id}/export/{type?}", "PelaburanController@index");
// Route::get("pelaburan/{project_id}/", "PelaburanController@index");
// Route::get("pelaburan/{project_id}/create", "PelaburanController@create")->name('pelaburan.create');
// Route::get("pelaburan/{project_id}/{id}/edit", "PelaburanController@edit")->name('pelaburan.edit');
// Route::post("pelaburan/{project_id}", "PelaburanController@store")->name('pelaburan.store');
// Route::put("pelaburan/{project_id}/{id}", "PelaburanController@update")->name('pelaburan.update');
// Route::patch("pelaburan/{project_id}/{id}", "PelaburanController@update")->name('pelaburan.update');
// Route::delete("pelaburan/{project_id}/{id}", "PelaburanController@destroy")->name('pelaburan.destroy');


// Route::get("proj/export/{type?}", "ProjController@index");
// Route::resource('proj','ProjController');