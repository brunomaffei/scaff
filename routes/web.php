<?php

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/list', 'HomeController@list')->name('admin.list');

Route::get('videos', 'VideoController@index')->name('video');
Route::get('videos/novo', 'VideoController@formAddVideo')->name('videos.formAddVideo');
Route::post('videos/store', 'VideoController@storeVideo')->name('videos.store');
Route::get('videos/listProfessor', 'VideoController@videoList')->name('videos.list');
Route::get('videos/list', 'VideoController@videoListAluno')->name('videos.listAluno');

//ROTA EDITAR
Route::get('videos/editar/{video}', 'VideoController@formEdit')->name('videos.editVideo');
Route::put('videos/edit/{video}', 'VideoController@edit')->name('videos.edit');

//DELETE ROTA
Route::delete('videos/{video}','VideoController@destroy')->name('videos.destroy');
