@extends('layouts.master')

@section('content')

    <div>
        Vista de nuestros proyectos:
        @if($nombre)
            <p>Vista detalle del proyecto: {{ $nombre }}</p>
        @else
            <p>(No hay proyecto seleccionado)</p>
        @endif
    </div>
    
@stop
