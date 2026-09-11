<?php
 
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
 Route::get('/login', function (){
    $n1 = 5;
    $n2 = 10;
    function suma ($n1, $n2){
        return $n1 + $n2;
    }
    return "La suma de $n1 + $n2 es: " . suma($n1, $n2);
    //return "Login";
});