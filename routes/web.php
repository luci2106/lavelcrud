<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModuloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rutas para el controlador Student
    Route::resource('students', StudentController::class);

    // Rutas para el controlador Modulo
    Route::resource('modulos', ModuloController::class);
});