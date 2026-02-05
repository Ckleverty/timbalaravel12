<!--estende a pagina layout--->
@extends('layout.admin')

@section('content')

    <H1>Bem vindo ao formulario de entrada</H1>
    <Div id="cadastrar">
 <a href="{{ route('users.create') }}">Cadastrar</a>
    </Div>


@endsection
