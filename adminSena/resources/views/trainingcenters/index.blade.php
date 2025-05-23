@extends('layouts.app')

@section('content')
        <h1>
        Lista de Centros de formación
    </h1>

        <style>
        table{
            border: solid;
            position: relative;
            left: 90px;
        }
        td{
            border: solid;
            text-align: left;
            
        }
        th{
            border: solid;
            padding: 5px 10px 5px 0px;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Ubi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($training as $t)
            <td>
                {{$t->id}}
            </td>
            <td>
                {{$t->name}}
            </td>
            <td>
                {{$t->location}}
            </td>

            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <a href="{{ route('inicio')}}">Volver al inicio</a>
@endsection

