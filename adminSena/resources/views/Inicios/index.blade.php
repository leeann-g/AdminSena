@extends('layouts.app')

@section('content')
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
            💻<a href="{{ route('computer.index')}}"><strong>Ver Computadores Guardados</strong></a>💻
        </li>
    </ol>
@endsection