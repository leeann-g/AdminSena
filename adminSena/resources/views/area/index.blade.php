@extends('layouts.app')

@section('content')
        <h1>
        Areas Guardadas
    </h1>
        <style>
        table{
            border: solid;
            position: relative;
            left: 180px;
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
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
            <td>
                {{$area->id}}
            </td>
            <td>
                {{$area->name}}
            </td>
            @endforeach
        </tbody>
    </table>
    <br>
    <br>
    <a href="{{ route('inicio')}}">Volver al inicio</a>
@endsection

