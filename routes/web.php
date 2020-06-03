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
    return redirect()->route('top');
});

Route::get('wedding_ring','Wedding_ringController@index')->name('top');

Route::get('/classes','ClassController@index')->name('class');
Route::get('/classes/add','ClassController@add');
Route::post('/classes/add','ClassController@create');
Route::get('/classes/edit','ClassController@edit');
Route::post('/classes/edit','ClassController@update');
Route::get('/classes/remove','ClassController@remove');

Route::get('/subjects','SubjectController@index')->name('subject');
Route::get('/bodys','BodyController@index')->name('body');

Route::get('/templates/add','TemplateController@add');
Route::post('/templates/add','TemplateController@create');
Route::get('/templates/edit','TemplateController@edit');
Route::post('/templates/edit','TemplateController@update');
Route::get('/templates/remove','TemplateController@remove');

Route::post('/subjects','SubjectController@search');
Route::post('/subjects/restore','SubjectController@restore');
Route::post('/subjects/force_delete','SubjectController@force_delete');
