<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index() {
        $competitions = Competition::get();

        $title = 'Competiciones';

        return view('competiciones');
    }

    public function show() {
        return 'Detalles competición '.$id;
    }

    public function create() {
        return 'Crear competición';
    }

    public function edit() {
        return 'Editar competición '.$id;
    }
}

    
