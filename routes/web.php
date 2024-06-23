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

Route::get('admin/crearUsuarios', function () {
    return view('admin.crearUser.usuario');
});

Route::get('admin/infoAdministradores', function () {
    return view('admin.infoAdmin.indexAdmin');
});

Route::get('admin/infoApartamentos', function () {
    return view('admin.infoApartamento.indexApartamento');
});

Route::get('admin/infoDomiciliarios', function () {
    return view('admin.infoDomiciliario.indexDomiciliario');
});

Route::get('admin/infoPersonal', function () {
    return view('admin.infoPersonal.indexPersonal');
});

Route::get('admin/infoPropietarios', function () {
    return view('admin.infoPropietario.indexPropietario');
});

Route::get('admin/infoResidentes', function () {
    return view('admin.infoResidente.indexResidente');
});

Route::get('admin/infoUnidad', function () {
    return view('admin.infoUnidad.indexUnidad');
});

Route::get('admin/infoVigilantes', function () {
    return view('admin.infoVigilante.indexVigilante');
});

Route::get('admin/infoVisitantes', function () {
    return view('admin.infoVisitante.indexVisitante');
});

/**VIGILANT */
Route::get('vigilant', function () {
    return view('vigilant.vigilant');
});

Route::get('vigilant/infoAdministradores', function () {
    return view('vigilant.infoAdmin.indexAdmin');
});

Route::get('vigilant/infoApartamentos', function () {
    return view('vigilant.infoApartamento.indexApartamento');
});

Route::get('vigilant/infoDomiciliarios', function () {
    return view('vigilant.infoDomiciliario.indexDomiciliario');
});

Route::get('vigilant/infoPersonal', function () {
    return view('vigilant.infoPersonal.indexPersonal');
});

Route::get('vigilant/infoPropietarios', function () {
    return view('vigilant.infoPropietario.indexPropietario');
});

Route::get('vigilant/infoResidentes', function () {
    return view('vigilant.infoResidente.indexResidente');
});

Route::get('vigilant/infoUnidad', function () {
    return view('vigilant.infoUnidad.indexUnidad');
});

Route::get('vigilant/infoVigilantes', function () {
    return view('vigilant.infoVigilante.indexVigilante');
});

Route::get('vigilant/infoVisitantes', function () {
    return view('vigilant.infoVisitante.indexVisitante');
});

