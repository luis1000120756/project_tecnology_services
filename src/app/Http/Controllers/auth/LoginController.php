<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Facade;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return redirect()->route('page.principal');
    }

    public function login(LoginRequest $request)
    {

        $request->validated();
        $credentials = ['name' => $request->name, 'password' => $request->password];

        if (FacadesAuth::attempt($credentials)) {
            return redirect()->route('dashboard.cli');
        };
        return back()->withErrors([
            'messageError' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->withInput($request->only('name'));
    }




    function logout()
    {
        FacadesAuth::logout();
        return redirect()->route('page.principal');
    }
}
