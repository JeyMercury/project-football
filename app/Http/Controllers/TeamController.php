<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Team;
use App\Models\Country;
use App\Models\Player;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {

        $teams = Team::all();

        $title = 'Equipos';

        return view('teams/teamsIndex', [
            'teams' => $teams,
            'title' => $title,
        ]);
    }

    public function details(Team $team) {

        $team = Team::findOrFail($team->id);

        $country = Country::where('id', $team->country_id)->first();
        $competitions = $team->competitions()->get();
        $players = $team->players()->get();

        return view('teams/teamsDetails', [
            'team' => $team,
            'country' => $country,
            'competitions' => $competitions,
            'players' => $players,
        ]);
    }

    public function create(Team $team) {

        $countries = Country::orderBy('name', 'asc')->get();
        $competitions = Competition::orderBy('name', 'asc')->get();

        return view('teams/teamsCreate', [
            'team' => $team,
            'countries' => $countries,
            'competitions' => $competitions,
        ]);
    }

    public function store(Request $request, Team $team) {

        $data = request()->validate([
            'name' => ['required', 'unique:teams,name'],
            'diminutive' => '',
            'coach' => '',
            'country_id' => 'required',
            'competitions' => '',
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.unique' => 'Ya existe un equipo con ese nombre',
            'country_id.required' => 'El país es obligatorio',
        ]);

        $team = Team::create([
            'name' => $data['name'],
            'diminutive' => $data['diminutive'],
            'coach' => $data['coach'],
            'country_id' => $data['country_id'],
        ]);

        $competitions = collect($request->input('competitions', []));
        $team->competitions()->sync($competitions);

        return redirect()->route('teams');
    }

    public function edit(Team $team) {

        $countries = Country::orderBy('name', 'asc')->get();
        $competitions = Competition::orderBy('name', 'asc')->get();

        return view('teams/teamsEdit',[
            'team' => $team,
            'countries' => $countries,
            'competitions' => $competitions,
        ]);
    }

    public function update(Request $request, Team $team) {
        
        $data = request()->validate([
            'name' => 'required',
            'diminutive' => '',
            'coach' => '',
            'country_id' => '',
        ], [
            'name.required' => 'El nombre es obligatorio'
        ]);

        $competitions = collect($request->input('competitions', []));
        $team->competitions()->sync($competitions);

        $team->update($data);

        return redirect()->route('teams.details', [
            'team' => $team,
            'competitions' => $competitions,
        ]);
    }

    function destroy(Team $team) {

        $team->delete();

        return redirect()->route('teams');
    }
}
