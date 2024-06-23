<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', LoginController::class);

/**ADMIN */

Route::get('admin', function () {
    return view('admin.admin');
});

Route::get('crear', function () {
    return view('admin.crearUser.usuario');
});

Route::get('infoAdminA', function () {
    return view('admin.infoAdmin.indexAdmin');
});

Route::get('infoApartamentoA', function () {
    return view('admin.infoApartamento.indexApartamento');
});

Route::get('infoDomiciliarioA', function () {
    return view('admin.infoDomiciliario.indexDomiciliario');
});

Route::get('infoPersonalA', function () {
    return view('admin.infoPersonal.indexPersonal');
});

Route::get('infoPropietarioA', function () {
    return view('admin.infoPropietario.indexPropietario');
});

Route::get('infoResidenteA', function () {
    return view('admin.infoResidente.indexResidente');
});

Route::get('infoUnidadA', function () {
    return view('admin.infoUnidad.indexUnidad');
});

Route::get('infoVigilanteA', function () {
    return view('admin.infoVigilante.indexVigilante');
});

Route::get('infoVisitanteA', function () {
    return view('admin.infoVisitante.indexVisitante');
});

/**VIGILANT */
Route::get('vigilant', function () {
    return view('vigilant.vigilant');
});

Route::get('infoAdmin', function () {
    return view('vigilant.infoAdmin.indexAdmin');
});

Route::get('infoApartamento', function () {
    return view('vigilant.infoApartamento.indexApartamento');
});

Route::get('infoDomiciliario', function () {
    return view('vigilant.infoDomiciliario.indexDomiciliario');
});

Route::get('infoPersonal', function () {
    return view('vigilant.infoPersonal.indexPersonal');
});

Route::get('infoPropietario', function () {
    return view('vigilant.infoPropietario.indexPropietario');
});

Route::get('infoResidente', function () {
    return view('vigilant.infoResidente.indexResidente');
});

Route::get('infoUnidad', function () {
    return view('vigilant.infoUnidad.indexUnidad');
});

Route::get('infoVigilante', function () {
    return view('vigilant.infoVigilante.indexVigilante');
});

Route::get('infoVisitante', function () {
    return view('vigilant.infoVisitante.indexVisitante');
});

