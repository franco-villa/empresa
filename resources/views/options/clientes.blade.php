@extends('layouts.master')

@section('content')

    <div>
        Vista de nuestros clientes:
        @if($nombre)
            <p>Vista detalle del cliente: {{ $nombre }}</p>
        @else
            <p>(No hay cliente seleccionado)</p>
        @endif
    </div>

@stop