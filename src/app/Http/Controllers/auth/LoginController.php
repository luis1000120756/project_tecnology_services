<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Facade;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return redirect()->route('page.principal');
    }

    public function login(Request $request)
    {

        $request->validate([
            'nameUser' => 'required',
            'password' => 'required',
        ]);
        $credentials = ['name' => $request->nameUser, 'password' => $request->password];

        if (FacadesAuth::attempt($credentials)) {
            return redirect()->route('dashboard.cli');
        };
        return back()->withErrors([
            'messageError' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->only('nameUser'));
    }




    function logout()
    {
        FacadesAuth::logout();
        return redirect()->route('page.principal');
    }
}
