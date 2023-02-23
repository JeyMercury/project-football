<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index() {
        $competitions = Competition::get();

        $title = 'Competiciones';

        return view('competitionsIndex', [
            'competitions' => $competitions,
            'title' => $title,
        ]);
    }

    public function show($id) {
        $competition = Competition::find($id);

        return view('competiciones.show', [
            'competition' => $competition,
        ]);
    }

    public function create() {
        return 'Crear competición';
    }

    public function edit() {
        return 'Editar competición '.$id;
    }
}

    
