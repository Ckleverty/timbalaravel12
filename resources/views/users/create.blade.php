<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite(['resources/css/app.css'])

    <title>Timba</title>
</head>
<body>

<div class=".main-conteiner">

        <header class="header">
                <div class="content-header">
                    <h2 class="title-logo"><a href="{{ route('dashboard') }}">Timba</a></h2>
                        <ul class="list-nav-link">
                           <li> <a href="#" class="nav-link">Usuarios</a> </li>
                           <li> <a href="{{ route('dashboard') }}" class="nav-link">Sair</a> </li>
                        </ul>

                </div>
        </header>

        <div class="content">
                <div class="content-title">
                        <h1 class="page-title">Cadatrar Usuarios</h1>
                            <a href="#" class="btn-primary">Listar</a>
                </div>

                 @if(session('success'))
        <p style="color: green;">
            {{session('success') }}
        </p>
        @endif

        @if ($errors->any())
            <div style="color: rgb(247, 6, 6);">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="post">

        @Csrf
        @csrf
                <div class="mb-4">
                     <label for="name" class="form-label"> Nome: </label>
        <input type="text" name="name" id="name" class="form-input" placeholder="Nome Completo" value="{{old('name')}}" required> <br><br>
</div>

                 <div class="mb-4">
                    <label for="email" class="form-label"> E-mail: </label>
        <input type="email" name="email" id="email" class="form-input" placeholder="Email do user" value="{{old('email')}}" required> <br><br>
</div>


         <div class="mb-4"> <label for="password" class="form-label">Senha</label>
        <input type="password" name="password" id="password" class="form-input" placeholder="Digite Senha com 6 digitos no minimo" value="{{old('password')}}" required> <br><br>
            <input type="submit" value="submeter" class="btn-sucess"></div>

        </form>
        </div>



</div>


    </body>
</html>
