<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pizzas/create','App\Http\Controllers\PizzaController@create');
Route::get('/pizzas', [App\Http\Controllers\PizzaController::class, 'index']);
Route::get('/pizzas/{id}', [App\Http\Controllers\PizzaController::class, 'show']);
Route::post('/pizzas','App\Http\Controllers\PizzaController@store')->name('pizzas.store');
Route::delete('/pizzas/{id}', [App\Http\Controllers\PizzaController::class, 'destroy']);

Auth::routes(['register' => false,]);