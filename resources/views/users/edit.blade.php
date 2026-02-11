<!--estende a pagina layout--->
@extends('layout.admin')

@section('content')




        <div class="content">
                <div class="content-title">
                        <h1 class="page-title">Editar Usuarios</h1>
                            <a href="{{ route('users.index') }}" class="btn-info">Listar</a>
                </div>

         <x-alert/>


        <form action="{{ route('user.update', ['user'=> $user->id]) }}" method="post">

        @csrf


        @method('PUT')
                <div class="mb-4">
                     <label for="name" class="form-label"> Nome: </label>
        <input type="text" name="name" id="name" class="form-input" placeholder="Nome Completo" value="{{old('name', $user->name)}}" > <br><br>
</div>

                 <div class="mb-4">
                    <label for="email" class="form-label"> E-mail: </label>
        <input type="email" name="email" id="email" class="form-input" placeholder="Email do user" value="{{old('email', $user->email)}}" > <br><br>
</div>

                <input type="submit" value="Salvar" class="btn-warning"></div>

        </form>
        </div>

@endsection


