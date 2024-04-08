<?php

use App\Http\Controllers\LegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lego', [LegoController::class,'index'])->name('lego.index');
Route::get('/lego/create', [LegoController::class,'create'])->name('lego.create');
Route::post('/lego/create', [LegoController::class,'store']);
