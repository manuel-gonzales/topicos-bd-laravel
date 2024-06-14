<?php

use Illuminate\Support\Facades\Route;

$controller_route = 'App\Http\Controllers\\';

Route::view('/', 'home')->name('home');

Route::view('nosotros','nosotros')->name('nosotros');

Route::get('servicios',$controller_route.'ServiciosController@index')->name('servicios.index');
Route::get('servicios/crear',$controller_route.'ServiciosController@create')->name('servicios.create');
Route::post('servicios',$controller_route.'ServiciosController@store')->name('servicios.store');
Route::get('servicios/{id}',$controller_route.'ServiciosController@show')->name('servicios.show');

Route::view('contacto','contacto')->name('contacto');

//Route::resource('servicios','App\Http\Controllers\ServiciosController')->only('index','show');