<?php
//USERS
Route::get('/user/edit/{id}', function ($id) {
    return view('application.usuarios.edit',['id'=>$id]);
})->middleware('auth');


Route::get('/users', function () {
    return view('application.users');
})->name('users')->middleware('auth');



Route::post('/user/update/{id}', 'UserController@edit')->name('editUser')->middleware('auth');

