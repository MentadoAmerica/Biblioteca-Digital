<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UsuarioRegistrado;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function register()
    {

    $validatedData = request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'password_confirmation' => 'required|string|min:8',
    ]);

    $user = \App\Models\User::create([
         'name' =>  $validatedData['name'],
         'email' => $validatedData['email'],
         'password' => bcrypt($validatedData['password']),
         'username' => $validatedData['email'], // Asignar el email como username
         'user_type' => 'user',
    ]);


    auth()->login($user);

    Mail::to($user->email)->send(new UsuarioRegistrado($user));
    
    return redirect()->route('home');
    }

    public function login()
    {
        $credentials = request()->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (auth()->attempt($credentials)){
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no son correctas.',
        ]);
    
    }

    public function logout()
    {
        auth()-> logout();
        return redirect()->route('login');
    }
}
