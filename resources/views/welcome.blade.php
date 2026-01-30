<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timba</title>
</head>
<body>
    <H1>Bem vindo ao formulario de entrada</H1>
    <Div id="cadastrar">
 <a href="{{ route('users.create') }}">Cadastrar</a>
    </Div>


</body>
</html>
