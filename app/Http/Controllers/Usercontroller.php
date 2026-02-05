<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

use Exception; // <-- usa esta

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store( UserRequest $request)
    {
        try {
          /*  $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
            ]);*/

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('users.create')
                             ->with('success', '😍 Usuario cadastrado com sucesso!');
        } catch (Exception $e) {
            return back()->withInput()
                         ->with('error', 'Usuario não Cadastrado, Emai invalido ou já existe!');
        }
    }
}
