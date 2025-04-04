<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Ruta para la página de inicio (index.blade.php)
Route::get('/', function () {
    return view('index'); // Asegúrate de que index.blade.php esté en resources/views
})->name('index');

// Rutas de autenticación personalizadas
//Route::get('/logados', [AuthController::class, 'logados'])->name('logados'); // Vista después del login
Route::post('/login', [AuthController::class, 'login'])->name('login'); // Procesa el login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Cierra sesión

// Rutas para registro
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form'); // Formulario de registro
Route::post('/register', [AuthController::class, 'register'])->name('register'); // Procesa el registro

// Ruta para roles (si es necesario)
Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

// Rutas de autenticación por defecto de Laravel (opcional)
Auth::routes();

// Ruta del dashboard o home después del login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Google Routes
|--------------------------------------------------------------------------
| Here are some temporary routes for testing purposes.
| These routes will be removed in the final version of the project.
*/
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::get('/{section}', [DashboardController::class, 'show'])
    ->name('dashboard')
    ->where('section', 'my-home|my-events|my-notes|my-schedule|support|documentation|users|permissions|analytics|reports');


/*
|--------------------------------------------------------------------------
| Temp Routes
|--------------------------------------------------------------------------
| Here are some temporary routes for testing purposes.
| These routes will be removed in the final version of the project.
*/

// Test Route
Route::get('/test', function () {
    return view('test');
});


/*
|--------------------------------------------------------------------------
| Data Inyection
|--------------------------------------------------------------------------
*/
// Roles
Route::get('/roles', [RoleController::class, 'index']);
Route::post('/roles', [RoleController::class, 'create']);

