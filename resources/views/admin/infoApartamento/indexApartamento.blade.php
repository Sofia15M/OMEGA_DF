@extends('layouts.plantillaInfo')

@section('title', 'Info. Apartamentos')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Info. Apartamentos')
    @section('button')
        <a href="#" class="fa fa-print icono" title="Imprimir"></a>
        <a href="#" class="boton">Añadir Apartamento</a>
        <a href="#" class="desativados">Ver Desactivados</a>
        <a href="#" class="atras">Volver atrás</a>
    @endsection
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <table class="table">

                        <thead>
                            <tr>
                                <th colspan="3" class="titulo">Apartamentos</th>
                            </tr>

                            <tr>
                                <th scope="col">Numero Apartamento</th>
                                <th scope="col">Informacion</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection
