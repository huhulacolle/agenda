<?php

namespace App\Http\Controllers;

use App\Models\devoir;
use App\Models\matiere;

class agenda extends Controller
{
    public function affiche()
    {
        $this->devoirterminer();
        
        $prof = matiere::select('*')->get();
        $affiche = devoir::select('date', 'devoir', 'matieres.nom', 'matieres.prof')
        ->join('matieres', 'matieres.id', '=', 'devoirs.nom')->orderby('date')->get();
        return view('main', compact('affiche', 'prof'));
        
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

    private function devoirterminer()
    {
        $date = devoir::select('date')->get();
        foreach ($date as $sql) {
            if (date('Y-m-d') > $sql -> date) {
                devoir::where('date', '=', $sql -> date)->delete();
            }
        }
    }
}
