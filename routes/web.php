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

Route::get('/projeto/aula/pw', function () {
        return 'Minha primeira rota com Laravel';
      
});

Route::get('/produtos/cadastro', 'App\Http\Controllers\ProdutosController@create');

