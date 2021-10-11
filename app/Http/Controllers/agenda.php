<?php

namespace App\Http\Controllers;

use App\Models\devoir;
use App\Models\matiere;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class agenda extends Controller
{
    public function affiche()
    {
        $affiche = devoir::select('date', 'devoir', 'matieres.nom', 'matieres.prof')
        ->join('matieres', 'matieres.id', '=', 'devoirs.nom')->get();
        return view('main', compact('affiche'));
    }
}
