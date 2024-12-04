<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LottoController;

Route::get('/', [LottoController::class, 'Welcome']);
ROute::get('/ev/{p}',[LottoController::class, 'ev']);
Route::get('/adatlap/{id}',[LottoController::class, 'adatlap']);
Route::get('/mikor', [LottoController::class, 'Mikor']);
Route::get('/tipp', [LottoController::class, 'Tipp']);
