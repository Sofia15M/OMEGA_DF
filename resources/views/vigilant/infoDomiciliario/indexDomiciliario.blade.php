@extends('layouts.plantillaInfo')

@section('title', 'Info. Domiciliarios')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Info. Domiciliarios')
    @section('button')
        <a href="#" class="fa fa-print icono" title="Imprimir"></a>
        <a href="#" class="boton">Añadir Domiciliario</a>
        <a href="#" class="desativados">Ver Desactivados</a>
        <a href="#" class="atras">Volver atrás</a>
    @endsection
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="5" class="titulo">Domiciliarios</th>
                                </tr>
                                <tr>
                                    <th scope="col">N. documento</th>
                                    <th scope="col">Numero Apartamento</th>
                                    <th scope="col">Nombre Residente</th>
                                    <th scope="col">Nombre Domiciliario</th>
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
    </div>

@endsection
