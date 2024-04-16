<?php

use App\Http\Controllers\LegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LegoController::class,'index'])->name('lego.index');
Route::delete('/lego/{lego}', [LegoController::class,'destroy'])->name('lego.destroy');
Route::get('/lego/create', [LegoController::class,'create'])->name('lego.create');
Route::post('/lego/create', [LegoController::class,'store']);
Route::post('/lego/{lego}/edit', [LegoController::class,'edit'])->name('lego.edit');
Route::put('/lego/{lego}', [LegoController::class,'update'])->name('lego.update');