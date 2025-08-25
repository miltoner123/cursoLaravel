<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola, {{ $name }}</h1>
    <ul>
        @foreach ($usuarios as $usuario)
        <li>{{ $usuario['name'] }} - {{ implode(', ', $usuario['profesiones']?? []) }}</li>
        @endforeach
    </ul>
    @if ($num1>$num2)
        <p>num1 {{ $num1 }} es mayor</p>
        @else
        <p>num2 {{ $num2 }} es mayor</p>
    @endif
</body>
</html>
