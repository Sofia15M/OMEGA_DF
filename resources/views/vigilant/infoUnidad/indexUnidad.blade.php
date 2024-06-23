@extends('layouts.plantillaInfo')

@section('title', 'Info. Unidad')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Info. Unidad')
    @section('button')
        <a href="#" class="fa fa-print icono" title="Imprimir"></a>
        <a href="#" class="atras">Volver atrás</a>
    @endsection

    <section class="conteiner">
        <article class="post">

        </article>
    </section>

@endsection
