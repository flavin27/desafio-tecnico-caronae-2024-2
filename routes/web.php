<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/carona/{id}', [HomeController::class, 'show'])->name('caronas.show');
