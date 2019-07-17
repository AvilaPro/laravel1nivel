@extends('layouts/app')

@section('contenido')
    <h1>Nombre del Asesor: {{$asesor->nombre}}</h1>
    <p>Profesion del Asesor: {{$asesor->profesion}}</p>
    <p>Fecha de ingreso del Asesor (Año-Mes-dia): {{$asesor->fecha_ingreso}}</p>
    <a href="{{ route('asesores.index') }}"> Lista de cursos</a>
@endsection