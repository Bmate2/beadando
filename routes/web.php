<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LegoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LegoController::class,'index'])->name('lego.index');
Route::delete('/lego/{lego}', [LegoController::class,'destroy'])->name('lego.destroy');
Route::get('/lego/create', [LegoController::class,'create'])->name('lego.create');
Route::post('/lego/create', [LegoController::class,'store']);
Route::post('/lego/{lego}/edit', [LegoController::class,'edit'])->name('lego.edit');
Route::put('/lego/{lego}', [LegoController::class,'update'])->name('lego.update');
Route::get('/login',[UserController::class,'loginPage'])->name('login.page');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'registerPage'])->name('register.page');
Route::post('/register',[UserController::class,'register'])->name('register');
