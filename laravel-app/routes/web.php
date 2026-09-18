<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/login', [LoginController::class, 'index']);
Route::get('/prueba', [LoginController::class, 'prueba']);
//Route::get('/sumar/{n1}/{n2}', [LoginController::class, 'sumar']);
Route::post('/operacion', [LoginController::class, 'operacion']);
Route::get('/operaciones', [LoginController::class, 'ope']);