@extends('layouts.plantillaInfo')

@section('title', 'Desativados Apartamentos')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/styleDesativar.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Desativados Apartamentos')
    @section('button')
        <a href="#" class="fa fa-print icono" title="Imprimir"></a>
        <a href="#" class="atras">Volver atrás</a>
    @endsection


@endsection
