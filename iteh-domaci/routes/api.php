<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\MenzaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/student', [StudentController::class, 'index']);

Route::post('/student', [StudentController::class, 'store']);
//
Route::get('/student/{id}', [StudentController::class, 'show']);

Route::put('/student/{id}', [StudentController::class, 'update']);

Route::delete('/student/{id}', [StudentController::class, 'destroy']);

Route::get('/menza', [MenzaController::class, 'index']);

Route::post('/menza', [MenzaController::class, 'store']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
