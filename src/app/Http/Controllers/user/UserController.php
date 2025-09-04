<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function registerForm()
    {
        return view('user.register-form');
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'nameUser' => 'required|string|max:255', // 👈 Debe validar nameUser, no name
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $generateCodeVerificaEmail = Str::random(4);
        $user = User::create([
            'name' => $request->nameUser,
            'email' => $request->email,
            'code_verification' => $generateCodeVerificaEmail,
            'password' => bcrypt($request->password),
        ]);
        return view('pagePrincipal.page-principal', [
            'successMessage' => 'Usuario registrado con éxito puedes iniciar sesión'
        ]);
    }
}
