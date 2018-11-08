<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('mru', 'MruController@index')->name('mru.index');
Route::get('mru/data', 'MruController@store')->name('mru.store');

Route::get('mrua', 'MruaController@index')->name('mrua.index');
Route::get('mrua/data', 'MruaController@store')->name('mrua.store');
