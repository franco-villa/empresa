<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/logout', function () {
    return 'Logout Usuario';
});


Route::get('/servicios/{nombre?}', function ($nombre = null) {
    return view('options.servicios', array('nombre' => $nombre));
})->where('nombre', '[a-zA-Z]*');

Route::get('/proyectos/{nombre?}', function ($nombre = null) {
    return view('options.proyectos', array('nombre' => $nombre));
})->where('nombre', '[a-zA-Z]*');

Route::get('/clientes/{nombre?}', function ($nombre = null) {
    return view('options.clientes', array('nombre' => $nombre));
})->where('nombre', '[a-zA-Z]*');


Route::get('/blog/{id?}', function ($id = null) {
    return view('options.blog', array('id'=>$id)); 
})->where('id', '[0-9]*');

Route::get('/contacto', function () {
    return view('options.contacto');
});