<?php

use App\Http\Controllers\LegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LegoController::class,'index'])->name('lego.index');
Route::post('/lego/destroy/{code}', [LegoController::class,'destroy'])->name('lego.destroy');
Route::get('/lego/create', [LegoController::class,'create'])->name('lego.create');
Route::post('/lego/create', [LegoController::class,'store']);
Route::get('/lego/edit/{code}', [LegoController::class,'edit'])->name('lego.edit');
Route::post('/lego/edit/{code}', [LegoController::class,'update']);