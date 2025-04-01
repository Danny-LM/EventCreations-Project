<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register'); // Aquí deberías tener la vista register.blade.php
    }

    // Procesar el registro de un nuevo usuario
    public function register(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'username' => ['required', 'string', 'max:255'], // Validar que el nombre de usuario esté presente y sea una cadena de caracteres
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Validar que el email esté presente, sea único y tenga un formato correcto
            'password' => ['required', 'confirmed', Rules\Password::defaults()], // Validar que la contraseña esté presente y sea confirmada correctamente
        ]);
        // Agregar un mensaje de éxito a la sesión
    session()->flash('success', '¡Te has registrado correctamente!');
    

        // Crear el usuario en la base de datos
        $user = User::create([
            'name' => $request->username, // Asignar el nombre de usuario
            'email' => $request->email,   // Asignar el email
            'password' => Hash::make($request->password), // Crear la contraseña cifrada
        ]);

        // Redirigir al dashboard después de registrar al usuario
        return redirect()->route('home'); // Redirige a la página principal
    }
}
