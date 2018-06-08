<?php

App::setLocale('es');


//Acceso a la pagina principal
Route::get('/', function () {
    return view('master');
});

//Acceso a la info sobre el negocio
Route::get('/about', function(){
    return view('about');
});

//Acceso a la info del local
Route::get('/store', function(){
    return view('store');
});

//Acceso a los productos de la web
Route::get('/products', function(){
    return view('products');
});

//Acceso a los eventos de la web
Route::get ('/events','EventsController@index'); 
