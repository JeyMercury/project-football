<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Team;
use App\Models\Country;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {

        $team = Team::all();

        $title = 'Equipos';

        return view('teams/teamsIndex', [
            'teams' => $team,
            'title' => $title,
        ]);
    }

    public function details(Team $team) {

        $country = Country::where('id', $team->country_id)->first();
        $competitions = Competition::where('id', $team->competition_id)->get();

        return view('teams/teamsDetails', [
            'team' => $team,
            'country' => $country,
            'competitions' => $competitions,
        ]);
    }

    public function create(Team $team) {

        $countries = Country::orderBy('name', 'asc')->get();
        $competitions = Competition::orderBy('name', 'asc')->get();

        return view('teams/teamsCreate', [
            'team' => $team,
            'countries' => $countries,
            'competitions' => $competitions
        ]);
    }

    public function store() {

        $data = request()->validate([
            'name' => ['required', 'unique:teams,name'],
            'diminutive' => '',
            'coach' => '',
            'country_id' => '',
            'competition_id' => '',
        ], [
            'name.required' => 'El nombre es obligatorio'
        ]);

        Team::create([
            'name' => $data['name'],
            'diminutive' => $data['diminutive'],
            'coach' => $data['coach'],
            'country_id' => $data['country_id'],
            'competition_id' => $data['competition_id'],
        ]);

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

    public function update(Team $team) {
        
        $data = request()->validate([
            'name' => 'required',
            'diminutive' => '',
            'coach' => '',
            'country_id' => '',
            'competition_id' => '',
        ]);

        $team->update($data);

        return redirect()->route('teams.details', ['team' => $team]);
    }

    function destroy(Team $team) {

        $team->delete();

        return redirect()->route('teams');
    }
}
