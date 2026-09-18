<?php
 
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome2');
});
 
Route::get('/login', [LoginController::class, 'index']);
Route::get('/prueba', [LoginController::class, 'prueba']);
Route::get('/sumar/{n1}/{n2}', [LoginController::class, 'sumar']);
Route::get('/multiplicar/{n1}/{n2}', [LoginController::class, 'multiplicar']);
Route::get('/operacion/{operacion}/{n1}/{n2}', [LoginController::class, 'operacion']);
Route::post('/operacion', [LoginController::class, 'operaciones']);
Route::get('/operacion', [LoginController::class, 'ope']);