<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Exceptions\Renderer\Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        // lógica da criação do usuário    //16171089 codigo

        return view('users.create');
    }
public function store(Request $request)
{
    try {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.create')->with('success', '😍, obaah mais uma vítima');
    } catch (Exception $e) {
        return back()->withInput()->with('error', 'Infelizmente não podemos te acolher 😔');
    }
}



}
