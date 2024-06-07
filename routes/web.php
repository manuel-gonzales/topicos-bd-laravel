<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::get('servicios/{id}','App\Http\Controllers\ServiciosController@show')->name('servicios.show');
Route::view('contacto','contacto')->name('contacto');

//Route::resource('servicios','App\Http\Controllers\ServiciosController')->only('index','show');