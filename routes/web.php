<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {

    $nome = "William Oliveira";
    $idade = 21;
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $nomes = ['William', 'Alexandre', 'Daniel', 'Augusto', 'Aldo'];

    return view('contact',
    [

    'nome' => $nome,
    'idade' => $idade,
    'profissao' => 'Desenvolvedor Web Jr.',
    'array' => $array,
    'nomes' => $nomes

    ]);
});