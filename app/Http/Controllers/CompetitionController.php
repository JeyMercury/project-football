<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index() {

        $competitions = Competition::get();

        $title = 'Competiciones';

        return view('competitions/competitionsIndex', [
            'competitions' => $competitions,
            'title' => $title,
        ]);
    }

    public function details($id) {

        $competition = Competition::findOrFail($id);

        return view('competitions/competitionsDetails', [
            'competition' => $competition,
        ]);
    }

    public function create() {

        return view('competitions.competitionsCreate');
    }

    public function store() {

        // return redirect('usuarios/crear')->withInput();

        $data = request()->validate([
            'name' => ['required', 'unique:competitions,name'],
            'host_country' => '',
            'n_participants_teams' => '',
        ], [
            'name.required' => 'El nombre es obligatorio'
        ]);

        Competition::create([
            'name' => $data['name'],
            'host_country' => $data['host_country'],
            'n_participants_teams' => $data['n_participants_teams'],
        ]);

        return redirect()->route('competitions');
    }

    public function edit(Competition $competition) {

        $competition = Competition::findOrFail($competition);

        return view('competitions/competitionsEdit',[
            'competition' => $competition,
        ]);
    }
}

    
