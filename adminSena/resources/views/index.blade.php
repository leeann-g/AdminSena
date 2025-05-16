<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="    background-color:aquamarine; display: flex; justify-content: center; align-items: center; height: 90vh;">
    <div style="    background-color: white; text-align: center; width: 300px; height: 350px; border-radius: 20px; box-shadow: -50px 50px 10px black;">
    <h1>
        Bienvenido
    </h1>
    <h2>
        Selecciona una opción
    </h2>
    <ol>
        <li>
            🦊<a href="{{ route('area.create')}}"><strong>CREAR AREA</strong></a>🦊 
            <br>
            🦊<a href="{{ route('area.index')}}"><strong>Ver Areas Guardadas</strong></a>🦊
        </li>
        <br>
        <li>
            😎<a href="{{ route('trainingCenter')}}" > <strong>CREAR CENTRO DE FORMACIÓN</strong></a>😎
            <br>
            😎<a href="{{ route('trainingcenter.index')}}"><strong>Ver Centros de formación Guardados</strong></a>😎
        </li>
        <br>
        <li>
            💻<a href="{{ route('computer')}}"> <strong>CREAR COMPUTERS</strong></a>💻
            <br>
            💻<a href="{{}}"><strong>Ver Computadores Guardados</strong></a>💻
        </li>
    </ol>
    </div>
</body>
</html>