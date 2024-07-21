<?php

use Illuminate\Support\Facades\Route;

$controller_route = 'App\Http\Controllers\\';

Route::view('/', 'home')->name('home');

Route::view('nosotros','nosotros')->name('nosotros');

Route::resource('servicios', $controller_route.'ServiciosController')->names('servicios');

Route::view('contacto','contacto')->name('contacto');

Route::post('contacto', $controller_route.'ContactoController@store');

Auth::routes(['register' => false]);