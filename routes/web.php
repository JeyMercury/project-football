<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

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


Route::get('/equipos', [TeamController::class, 'index'])
    ->name('teams');
Route::get('/equipos/crear', [TeamController::class, 'create'])
    ->name('teams.create');
Route::get('/equipos/{team}', [TeamController::class, 'details'])
    ->name('teams.details');
Route::post('/equipos', [TeamController::class, 'store'])
    ->name('teams.store');
Route::get('equipos/{team}/editar', [TeamController::class, 'edit'])
    ->name('teams.edit');
Route::put('/teams/{team}', [TeamController::class, 'update'])
    ->name('teams.update');
Route::delete('/equipos/{team}', [TeamController::class, 'destroy'])
    ->name('teams.destroy');


Route::get('/competiciones/organigrama', function() {
    return 'Organigrama';
});


Route::get('/jugadores', [PlayerController::class, 'index'])
    ->name('players');
Route::get('/jugadores/crear', [PlayerController::class, 'create'])
    ->name('players.create');
Route::get('/jugadores/{player}', [PlayerController::class, 'details'])
    ->name('players.details');
Route::post('/jugadores', [PlayerController::class, 'store'])
    ->name('players.store');
Route::get('jugadores/{player}/editar', [PlayerController::class, 'edit'])
    ->name('players.edit');
Route::put('/players/{player}', [PlayerController::class, 'update'])
    ->name('players.update');
Route::delete('/jugadores/{player}', [PlayerController::class, 'destroy'])
    ->name('players.destroy');