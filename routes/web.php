<?php

use App\Http\Controllers\jogosController;
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

/*Route::get('/', function(){
    return view('welcome');
});*/

//Route::view('/jogos', 'jogos', ['name' => 'GTA']);

/*Route::get('/jogos/{name?}', function($name = null){
    return view('jogos', ['name' => $name]);
});*/

/*Route::get('/jogos/{name?}', function($name = null){
    return view('jogos', ['name' => $name]);
})->where('name', '[A-Za-z]+'); // faz com que a rota apenas aceite letras*/

/*Route::get('/jogos/{id?}', function($id = null){
    return view('jogos', ['id' => $id]);
})->where('id', '[0-9]+'); // faz com que a rota apenas aceite numeros*/

/*Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
    return view('jogos', ['id' => $id, 'name' => $name]);
})->where(['id'=> '[0-9]+', 'name' => '[A-Za-z]+']); // aceitando numeros e letras*/
/*

Route::get('/', function(){
    return view('welcome');
})->name('home-index'); // Atribuido um nome a rota

Route::get('/jogos', [jogosController::class, 'index']);*/


//SISTEMA

Route::prefix('jogos')->group(function(){//criando grupo de rotas
    Route::get('/', [jogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [jogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [jogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [jogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [jogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [jogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});



Route::fallback(function(){ // Caso uma rota não exista ele cai aqui
    return view('404');
});