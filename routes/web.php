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

Route::get('/',function (){
    return redirect('library');
});



Route::get('admin','SectionCont@admin');

//Route::get('library','sectionController@index');
//Route::get('library/create','sectionController@create');
//Route::post('library/create','sectionController@saveSection');
//Route::get('library/{sectionName}','sectionController@showSection');
//Route::get('library/{sectionName}/edit','sectionController@edit');
//Route::patch('library/{sectionName}/edit','sectionController@saveEditedSection');

Route::resource('library','SectionCont');

