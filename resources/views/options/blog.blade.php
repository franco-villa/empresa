@extends('layouts.master')

@section('content')
<div>
        Vista de nuestros blogs:
        @if($id)
            <p>Vista detalle del blog con id: {{ $id }}</p>
        @else
            <p>(No hay blog seleccionado)</p>
        @endif
    </div>
@stop