<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'name' => 'required',
            'firstname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'firstname' => $request->input('firstname'),
            'login' => $request->input('login'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('registration.success');
    }

    public function showRegistrationSuccess()
    {
        return view('registration_success');
    }

        public function showLoginForm()
    {
        return view('register');
    }

        public function login(Request $request)
    {
        $request->validate([
            'email_login' => 'required|email',
            'password_login' => 'required',
        ]);

        $credentials = [
            'email' => $request->input('email_login'),
            'password' => $request->input('password_login'),
        ];

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi, rediriger l'utilisateur vers une page de succès
            Auth::login(Auth::user());
            return redirect()->route('login.success');
        } else {
            // L'authentification a échoué, rediriger l'utilisateur vers la page de connexion avec un message d'erreur
            return redirect()->route('login')->with('error', 'Identifiants de connexion invalides');
        }
    }


    public function showLoginSuccess()
{
    $userName = Auth::user()->login;
    return view('login_success', compact('userName'));
}


}
