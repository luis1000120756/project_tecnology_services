<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\createUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function registerForm()
    {
        return view('user.register-form');
    }

    public function registerUser(CreateUserRequest $request)
    {
        $validated = $request->validated();
        //Se crea el usuario si los datos fueron validados
        $user = User::create($validated);
        $roleClient = Role::where('name', 'client')->first();
        if($roleClient){
            $user->roles()->attach($roleClient->id);
        }

        return view('pagePrincipal.page-principal', [
            'successMessage' => 'Usuario registrado con éxito puedes iniciar sesión'
        ]);
    }
}
