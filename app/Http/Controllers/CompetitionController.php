<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Team;

class CompetitionController extends Controller
{
    public function index() {

        $competitions = Competition::all();

        $title = 'Competiciones';

        return view('competitions/competitionsIndex', [
            'competitions' => $competitions,
            'title' => $title,
        ]);
    }

    public function details(Competition $competition) {

        $competition = Competition::findOrFail($competition->id);

        $teams = $competition->teams()->get();

        return view('competitions/competitionsDetails', [
            'competition' => $competition,
            'teams' => $teams,
        ]);
    }

    public function create(Competition $competition) {

        $teams = Team::all();

        return view('competitions/competitionsCreate', [
            'competition' => $competition,
            'teams' => $teams,
        ]);
    }

    public function store(Request $request, Competition $competition) {

        // $competition = Competition::create($request->all());
        
        $data = request()->validate([
            'name' => ['required', 'unique:competitions,name'],
            'host_country' => '',
        ], [
            'name.required' => 'El nombre es obligatorio'
        ]);

        $competition = Competition::create([
            'name' => $data['name'],
            'host_country' => $data['host_country'],
        ]);

        $teams = collect($request->input('teams', []));

        $competition->teams()->sync($teams);

        return redirect()->route('competitions');
    }

    public function edit(Competition $competition) {

        $teams = Team::all();

        return view('competitions/competitionsEdit',[
            'competition' => $competition,
            'teams' => $teams,
        ]);
    }

    public function update(Request $request, Competition $competition) {
        
        $data = request()->validate([
            'name' => 'required',
            'host_country' => '',
        ]);
        
        $competition->teams()->sync([$request->teams]);

        $competition->update($data);

        return redirect()->route('competitions.details', [
            'competition' => $competition,
        ]);
    }

    function destroy(Competition $competition) {

        $competition->delete();

        return redirect()->route('competitions');
    }
}
