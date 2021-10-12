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
        // $prof = matiere::select('*')->get();
        return $this->devoirterminer(devoir::select('*')->get());
        // $affiche = devoir::select('date', 'devoir', 'matieres.nom', 'matieres.prof')
        // ->join('matieres', 'matieres.id', '=', 'devoirs.nom')->get();
        // return view('main', compact('affiche', 'prof'));
    }

    public function ajouterdevoir()
    {
        devoir::insert([
            "nom" => $_GET['nom'],
            "devoir" => $_GET['devoir'],
            "date" => $_GET['date']
        ]);
        return redirect('/');
    }

    private function devoirterminer($date)
    {
        return $date;
    }
}
