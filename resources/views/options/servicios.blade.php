@extends('layouts.master')

@section('content')

    <div>
        Vista de nuestros servicios:
        @if($nombre)
            <p>Vista detalle del servicio: {{ $nombre }}</p>
        @else
            <p>(No hay servicio seleccionado)</p>
        @endif
    </div>

@stop