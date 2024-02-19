<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Controle de Séries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mt-3">
        <h1>{{ $title }}</h1>

        {{ $slot }} <!--Conteudo que vai ser adicionado depois-->
    </div>
</body>

</html>