<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Rutas para el perfil de usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //Rutas creadas para el parcial con CRUD
    Route::resource('clientes', \App\Http\Controllers\ClienteController::class);
    Route::resource('servicios', \App\Http\Controllers\ServicioController::class);
    Route::resource('reservas', \App\Http\Controllers\ReservaController::class);
});

require __DIR__.'/auth.php';
