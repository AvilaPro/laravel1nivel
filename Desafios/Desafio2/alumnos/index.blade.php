@extends('layouts/app')

@section('contenido')

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota1</th>
                <th>Nota2</th>
                <th>Nota3</th>
                <th>Nota_Promedio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notas_alumnos as $alum => $note)
            @php
                $nota_acum=0;
                $nota_prom=0;
            @endphp
            <tr>
                <th>{{$alum}}</th>
                @foreach ($note as $notas)
                @php
                    $nota_acum+=$notas;
                @endphp
                <th>{{$notas}}</th>                    
                @endforeach
                <th>@php
                        $nota_prom=$nota_acum/count($note);
                    @endphp
                    {{$nota_prom}}
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection