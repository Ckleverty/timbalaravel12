<!--estende a pagina layout--->
@extends('layout.admin')

@section('content')




        <div class="content">
                <div class="content-title">
                    <h1 class="page-title">Listar os Usuarios</h1>
                <a href="{{ route('users.create') }}"
                class="btn-sucess">Cadastrar</a>
                </div>

         <x-alert/>

               <div class="table-conteiner">
                    <table class="table">

                        <thead>
                            <tr class="table-header">
                                <th class="table-head">ID</th>
                                <th class="table-head">Nome</th>
                                <th class="table-head">Email</th>
                                <th class="table-head">Ações</th>
                            </tr>
                        </thead>

                         <tbody class="table-body">
                                    @forelse ($users as $user)
                                        <tr class="table-row">
                                            <td class="table-cell">{{ $user->id }}</td>
                                              <td class="table-cell">{{ $user->name }}</td>
                                                <td class="table-cell">{{ $user->email }}</td>
                                                  <td class="table-actions">
                                                    <a href="#" class="btn-primary">Vizualizar </a>
                                                    <a href="{{ route('user.edit', ['user' => $user->id ])}}" class="btn-warning">Editar </a>
                                                    <a href="##" class="btn-danger"> Apagar</a>
                                                  </td>
                                        </tr>
                                    @empty
                                    <div class="alerta-error">
                                            nemhum usuario cadastrado!
                                    </div>

                                    @endforelse
                            </tbody>
                    </table>

               </div>
               <div class="pagination">
                        {{ $users->links() }}
               </div>
               </div>

@endsection


