<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

use Exception; // <-- usa esta
use Illuminate\View\View;
use PhpParser\Node\Stmt\Catch_;

class UserController extends Controller
{
#chamar index
public function index(){
   //recuperar registros do  BD ordenados por id decrescente e paginar com 5 registros por pagina
        $users = User::orderByDesc('id')->paginate(5);

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

    public function edit(user $user){
     // carregar view
        return view('users.edit', ['user' => $user]);

    }

    public function update(UserRequest $request, User $user){
        try{
                //Editar as informacoes do registro no banco de dados
                $user->update([
                'name' => $request->name,
                'email' => $request->email,
                ]);
                  //redirecionar usuario, enviar mensagem de sucesso
                return redirect()->route('user.edit', ['user' => $user->id])->with('success','Usuario
                editado com sucesso');
        }catch(Exception $e){

                //redirecionar o usauario, enviar memsagem de erro
                return back()->withInput()->with('error', 'Usuario não editado');
        }
    }
}
