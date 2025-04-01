<?php

namespace App\Http\Controllers\Auth;
use Laravel\Socialite\Facades\Socialite; // Importa el facade Socialite
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Verifica si el usuario ya existe en la base de datos
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Si el usuario no existe, créalo
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt('password'), // Puedes generar una contraseña aleatoria o dejarla vacía
                ]);
            }

            // Autentica al usuario
            Auth::login($user);

            return redirect()->intended('/dashboard'); // Redirige al usuario a la página de inicio

        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Algo salió mal: ' . $e->getMessage());
        }
    }
}
