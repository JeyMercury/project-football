<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CountryController;

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

Route::get('/competiciones', [CompetitionController::class, 'index'])
    ->name('competitions');
Route::get('/competiciones/crear', [CompetitionController::class, 'create'])
    ->name('competitions.create');
Route::get('/competiciones/{competition}', [CompetitionController::class, 'details'])
    ->name('competitions.details');
Route::post('/competiciones', [CompetitionController::class, 'store'])
    ->name('competitions.store');
Route::get('/competiciones/{competition}/editar', [CompetitionController::class, 'edit'])
    ->name('competitions.edit');
Route::put('/competitions/{competition}', [CompetitionController::class, 'update'])
    ->name('competitions.update');
Route::delete('/competiciones/{competition}', [CompetitionController::class, 'destroy'])
    ->name('competitions.destroy');


Route::get('/paises', [CountryController::class, 'index'])
    ->name('countries');
Route::get('/paises/crear', [CountryController::class, 'create'])
    ->name('countries.create');
Route::get('/paises/{country}', [CountryController::class, 'details'])
    ->name('countries.details');
Route::post('/paises', [CountryController::class, 'store'])
    ->name('countries.store');
Route::get('/paises/{country}/editar', [CountryController::class, 'edit'])
    ->name('countries.edit');
Route::put('/countries/{country}', [CountryController::class, 'update'])
    ->name('countries.update');
// Route::delete('/paises/{country}', [CountryController::class, 'destroy'])
//     ->name('countries.destroy');


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
Route::get('/jugadores/{id}/editar', function ($id) {
    return 'Editar jugador '.$id;
});
