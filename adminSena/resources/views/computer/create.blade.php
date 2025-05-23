@extends('layouts.app')
@section('content')
        <form action=" {{ route('computer.store')}}" method="POST" style="padding-top: 0px">
            @csrf
            <h1>
                Computer
            </h1>
            
        <label for="number">
            Numero:
        </label>
        <input type="number" name="number" id="number">
        <br>
        <br>
        <label for="marca">
            Marca:
        </label>
        <input type="text" name="brand" id="marca">
        <br>
        <br>
        <button type="submit">Crear</button>
        <br>
        <br>
        <a href="{{ route('inicio')}}">Volver al Incio</a>
    </form>
@endsection
