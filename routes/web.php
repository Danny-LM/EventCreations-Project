<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;

// Ruta para la página de inicio (index.blade.php)
Route::get('/', function () {
    return view('index'); // Asegúrate de que index.blade.php esté en la carpeta resources/views
});

// Rutas para autenticación y otras páginas
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login'); // Login
Route::get('/logados', [AuthController::class, 'logados'])->name('logados'); // Página después del login
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); // Logout

// Rutas adicionales
Route::get('roles', [RoleController::class, 'index']); // Controlador para roles

Auth::routes(); // Rutas de autenticación por defecto

// Ruta de la página de inicio (Home) después de iniciar sesión
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de Google

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
