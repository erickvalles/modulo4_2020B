<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto creado</title>
</head>
<body>
    <p>
    Se ha creado un nuevo producto con las siguientes características:
    <li>
        <ul>Nombre: {{$producto->nombre}}</ul>
        <ul>Descripción: {{$producto->descripcion}}</ul>
        <ul>Precio: ${{$producto->precio}}</ul>
    </li>
    Con un stock de {{$producto->stock}} elementos
    </p>
</body>
</html>