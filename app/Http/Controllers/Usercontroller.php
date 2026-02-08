<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

use Exception; // <-- usa esta
use Illuminate\View\View;

class UserController extends Controller
{
#chamar index
public function index(){
   //recuperar registros do BD
        $users = User::orderByDesc('id')->paginate(100);

   // Carregar o arquivo View
 return view('users.index', ['users' => $users]);


}


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
