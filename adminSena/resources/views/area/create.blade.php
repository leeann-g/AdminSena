@extends('layouts.app')
@section('content')
        <h1>Area</h1>
    
    <form action="{{route('area.store')}}" method="POST">
        @csrf
        <label for="name">
            Nombre
            <input type="text" name="name" id="name" required>
        </label>
        <br>
        <br>
        <button type="submit">Crear</button>
        <br><br>
        <a href="{{route('inicio')}}">Volver al inicio</a>
    </form>
@endsection
