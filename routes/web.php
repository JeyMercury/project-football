<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CompetitionController;

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

Route::get('/competiciones', [CompetitionController::class, 'index']);
Route::get('/competiciones/{id}', [CompetitionController::class, 'show']);
Route::get('/competiciones/crear', [CompetitionController::class, 'create']);
Route::get('/competiciones/{id}/editar', [CompetitionController::class, 'edit']);


Route::get('/paises', function() {
    return 'Países participantes';
});
Route::get('/paises/crear', function () {
    return 'Añadir país';
});
Route::get('/paises/{id}/editar', function ($id) {
    return 'Editar país '.$id;
});
Route::get('/paises/{id}', function ($id) {
    return 'Detalles país '.$id;
});


Route::get('/equipos', function() {
    return 'Equipos participantes';
});
Route::get('/equipos/crear', function () {
    return 'Crear equipo';
});
Route::get('/equipos/{id}/editar', function ($id) {
    return 'Editar equipo '.$id;
});
Route::get('/equipos/{id}', function ($id) {
    return 'Detalles equipo '.$id;
});


Route::get('/competiciones/organigrama', function() {
    return 'Organigrama';
});


Route::get('/jugadores', function() {
    return 'Jugadores';
});
Route::get('/jugadores/crear', function () {
    return 'Añadir jugador';
});
Route::get('/jugadores/{id}/editar', function () {
    return 'Editar jugador '.$id;
});
