<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Agregado para manejar el modelo User
use Illuminate\Support\Facades\Hash; // Agregado para el manejo de contraseñas

class AuthController extends Controller
{
    /**
     * Muestra la vista de inicio o la vista de usuario autenticado.
     */
    public function index()
    {
        if (Auth::check()) {
            return view('logados');
        }
        
        return view('index');
    }

    /**
     * Muestra el formulario de registro.
     */
    public function showRegisterForm()
    {
        return view('auth.register'); // Redirige a la vista del formulario de registro
    }

    /**
     * Procesa el formulario de registro.
     */
    public function register(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Creación del usuario en la base de datos
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Se cifra la contraseña antes de guardarla
        ]);

        // Autenticación automática después del registro
        Auth::login($user);

        return redirect()->route('logados')->withSuccess('Registro exitoso');
    }

    /**
     * Procesa el formulario de login y autentica al usuario.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email', // Se agregó validación de email
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('logados')->withSuccess('Inicio de sesión exitoso');
        }

        return redirect("/")->withErrors(['email' => 'Los datos introducidos no son correctos']); // Se usa withErrors para mostrar errores correctamente
    }

    /**
     * Muestra la vista de usuario autenticado o redirige al login.
     */
    public function logados()
    {
        if (Auth::check()) {
            return view('logados');
        }

        return redirect("/")->withErrors(['auth' => 'No tienes acceso, por favor inicia sesión']);
    }

    /**
     * Cierra la sesión del usuario y lo redirige al inicio.
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Has cerrado sesión correctamente');
    }}