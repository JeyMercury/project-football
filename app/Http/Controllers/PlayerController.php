<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {

        $players = Player::all();

        $title = 'Jugadores';

        return view('players/playersIndex', [
            'players' => $players,
            'title' => $title,
        ]);
    }

    public function details(Player $player) {

        $team = Team::where('id', $player->team_id)->first();

        return view('players/playersDetails', [
            'player' => $player,
            'team' => $team,
        ]);
    }

    public function create(Player $player) {

        $teams = Team::orderBy('name', 'asc')->get();

        return view('players/playersCreate', [
            'player' => $player,
            'teams' => $teams,
        ]);
    }

    public function store() {

        $data = request()->validate([
            'name' => ['required', 'unique:players,name'],
            'dorsal' => '',
            'nationality' => '',
            'team_id' => '',
            'position' => '',
        ], [
            'name.required' => 'El nombre es obligatorio',
            'team_id.required' => 'El equipo es obligatorio'
        ]);

        Player::create([
            'name' => $data['name'],
            'dorsal' => $data['dorsal'],
            'nationality' => $data['nationality'],
            'team_id' => $data['team_id'],
            'position' => $data['position'],
        ]);

        return redirect()->route('players');
    }

    public function edit(Player $player) {

        $teams = Team::orderBy('name', 'asc')->get();

        return view('players/playersEdit',[
            'player' => $player,
            'teams' => $teams,
        ]);
    }

    public function update(Player $player) {
        
        $data = request()->validate([
            'name' => 'required',
            'dorsal' => '',
            'nationality' => '',
            'team_id' => '',
            'position' => '',
        ]);

        $player->update($data);

        return redirect()->route('players.details', ['player' => $player]);
    }

    function destroy(Player $player) {

        $player->delete();

        return redirect()->route('players');
    }
}
