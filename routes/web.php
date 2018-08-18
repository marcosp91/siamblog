<?php

Route::view('/', 'index')->name('index');

Route::view('/posts', 'posts')->name('posts');

// Route::view('/posts', 'posts')->name('posts');

Route::post('/', 'FormCaptionController@insereContato')->name('index.emailcaption');

Route::view('/efeito-safona', 'posts.o-que-é-efeito-sanfona')->name('efeito-safona');
Route::view('/exames-essenciais', 'posts.exames-essenciais-para-dieta-exercícios-físicos')->name('exames-essenciais');
Route::view('/estilos-cabelos', 'posts.estilo-que-você-quer-ter-com-o-seu-cabelo')->name('estilos-cabelos');


// Route::get('/', function () {
//      return view('index')->name('index');
// });

// Route::get('/efeito-safona', function () {
//      return view('posts.o-que-é-efeito-sanfona');
// });

// Route::get('/exames-essenciais', function () {
//      return view('posts.exames-essenciais-para-dieta-exercícios-físicos');
// });

// Route::get('/estilos-cabelos', function () {
//      return view('posts.estilo-que-você-quer-ter-com-o-seu-cabelo');
// });

