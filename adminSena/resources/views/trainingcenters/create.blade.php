@extends('layouts.app')

@section('content')

        <h1>
            Centros Entrenamiento
        </h1>
        <form action="{{route('trainingcenter.store')}}" method="POST">
        @csrf
        <label for="name">
            Nombre:
            <input type="text" name="name" id="name" required>
        </label>
        <br>
        <br>
        <label for="location">
            Ubicación:
            <input type="text" name="location" id="location" required>
        </label>
        <br>
        <br>
        <button type="submit">Crear</button>
        <br><br>
        <a href="{{ route('inicio')}}">Volver al inicio</a>
    </form>
@endsection
