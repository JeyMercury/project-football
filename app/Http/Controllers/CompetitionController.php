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
        return view('competitions/competitionsCreate');
    }

    public function store() {
        return 'Procesando información';
    }

    public function edit() {
        return 'Editar competición '.$id;
    }
}

    
