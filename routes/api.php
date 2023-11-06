<?php

use App\Http\Controllers\DogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/dogs', [DogController::class, 'index']);
Route::post('/dogs/store', [DogController::class, 'store']);
Route::get('/dogs/show/{id}', [DogController::class, 'show']);
Route::put('/dogs/update/{id}', [DogController::class, 'update']);
Route::delete('/dogs/destroy/{id}', [DogController::class, 'destroy']);


