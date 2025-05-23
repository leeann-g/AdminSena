@extends('layouts.app')

@section('content')
    <h1>
        Lista de Computadores:
    </h1>

    <style>
        table{
            border: solid;
            position: relative;
            left: 50px;
        }
        td{
            border: solid;
            text-align: left;
            
        }
        th{
            border: solid;
            padding: 5px 20px 5px 0px;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    N°
                </th>
                <th>
                    Marca
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
            <td>
                {{$computer->id}}
            </td>
            <td>
                {{$computer->number}}
            </td>
            <td>
                {{$computer->brand}}
            </td>

            @endforeach
        </tbody>
    </table>


    <br>
    <br>
    <a href="{{ route('inicio')}}">Volver al inicio</a>
@endsection
