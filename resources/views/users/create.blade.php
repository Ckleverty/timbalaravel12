<!--estende a pagina layout--->
@extends('layout.admin')

@section('content')




        <div class="content">
                <div class="content-title">
                        <h1 class="page-title">Cadatrar Usuarios</h1>
                            <a href="#" class="btn-primary">Listar</a>
                </div>

         <x-alert/>


        <form action="{{ route('users.store') }}" method="post">

        @csrf
        @csrf
                <div class="mb-4">
                     <label for="name" class="form-label"> Nome: </label>
        <input type="text" name="name" id="name" class="form-input" placeholder="Nome Completo" value="{{old('name')}}" > <br><br>
</div>

                 <div class="mb-4">
                    <label for="email" class="form-label"> E-mail: </label>
        <input type="email" name="email" id="email" class="form-input" placeholder="Email do user" value="{{old('email')}}" > <br><br>
</div>


         <div class="mb-4"> <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" id="password" class="form-input" placeholder="Digite Senha com 6 digitos no minimo" value="{{old('password')}}" > <br><br>
            <input type="submit" value="submeter" class="btn-sucess"></div>

        </form>
        </div>

@endsection


