@extends('layouts.plantillaInfo')

@section('title', 'Info. Residentes')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    @section('Subtitle', 'Info. Residente')
    @section('button')
        <a href="#" class="fa fa-print icono" title="Imprimir"></a>
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
                                <th colspan="6" class="titulo">Residentes</th>
                            </tr>

                            <tr>
                                <th scope="col">N. Documento</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Nombre completo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Fecha de Modificación</th>
                                <th scope="col">N. Apartamento</th>
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
