@extends('layouts/app')

@section('contenido')

    <h1>En la vista asesores</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre del Asesor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($asesores as $asesor)
            
            <tr>
                <td>{{$asesor->nombre}}</td>
                <td><a href="{{route('asesores.show',$asesor->id) }}">ver detalle del Asesor</a> </td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
    
@endsection