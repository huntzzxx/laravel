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
use App\Http\Controllers\Event;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [Event::class, 'index']); 
Route::get('/events/create', [Event::class, 'create']); 

Route::get('/layouts/main', function () {
    return view('main');
});

Route::get('/produtos}', function () {

    $busca = request('search');

    return view('product', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});