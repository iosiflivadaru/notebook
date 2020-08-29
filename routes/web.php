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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Note routes
Route::get('/notes', 'NoteController@index')->name('notes');
Route::get('/note/create', 'NoteController@create')->name('note.create');
Route::post('/note/store', 'NoteController@store')->name('note.store');
Route::get('/note/{note}/edit', 'NoteController@edit')->name('note.edit');
Route::put('/note/{note}/update', 'NoteController@update')->name('note.update');
Route::delete('/note/{note}/delete', 'NoteController@destroy')->name('note.delete');
