<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

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

        return view('teams/teamsDetails', [
            'team' => $team,
        ]);
    }

    public function create() {

        return view('teams/teamsCreate');
    }

    public function store() {

        // return redirect('usuarios/crear')->withInput();

        $data = request()->validate([
            'name' => ['required', 'unique:teams,name'],
            'diminutive' => '',
            'coach' => '',
            'country_id' => '',
        ], [
            'name.required' => 'El nombre es obligatorio'
        ]);

        Team::create([
            'name' => $data['name'],
            'diminutive' => $data['diminutive'],
            'coach' => $data['coach'],
            'country_id' => $data['country_id'],
        ]);

        return redirect()->route('teams');
    }

    public function edit(Team $team) {

        return view('teams/teamsEdit',[
            'team' => $team,
        ]);
    }

    public function update(Team $team) {
        
        $data = request()->validate([
            'name' => 'required',
            'diminutive' => '',
            'coach' => '',
            'country_id' => '',
        ]);

        $team->update($data);

        return redirect()->route('teams.details', ['team' => $team]);
    }

    function destroy(Team $team) {

        $team->delete();

        return redirect()->route('teams');
    }
}
