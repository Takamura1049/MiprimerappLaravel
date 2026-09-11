<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::get('/prueba', [App\Http\Controllers\LoginController::class, 'prueba']);
