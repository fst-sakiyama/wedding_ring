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
Route::post('wedding_ring','Wedding_ringController@search');

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

Route::get('/basic_data','Basic_dataController@index');
Route::get('/basic_data/detail','Basic_dataController@detail');
Route::get('/basic_data/add','Basic_dataController@add');
Route::post('/basic_data/add','Basic_dataController@create');
Route::get('/basic_data/edit','Basic_dataController@edit');
Route::post('/basic_data/edit','Basic_dataController@update');
Route::get('/basic_data/remove','Basic_dataController@remove');
Route::post('/basic_data/restore','Basic_dataController@restore');

Route::get('/answers','AnswerController@index');
Route::post('/answers/add','AnswerController@create');
Route::get('/answers/edit','AnswerController@edit');
Route::post('/answers/edit','AnswerController@update');
Route::get('/answers/remove','AnswerController@remove');
Route::get('/answers/restore','AnswerController@restore');
Route::get('/answers/force_delete','AnswerController@force_delete');
