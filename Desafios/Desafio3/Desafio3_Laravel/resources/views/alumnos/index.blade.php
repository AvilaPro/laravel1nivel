@extends('layouts/app')

@section('contenido')

    <h1>En la vista alumnos</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <th>{{$alumno->nombre}}</th>
                <th>{{$alumno->apellido}}</th>                    
                <th>
                    {{$alumno->edad}}
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection