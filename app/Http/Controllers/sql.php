<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use App\Models\devoir;

class sql extends Controller
{

    public function ajouterprof()
    {
        $prof = matiere::select('*')->get();
        $devoir = devoir::select('id')->get();
        return view('sql.afficheprof', compact('prof', 'devoir'));
    }

    public function ajouter()
    {
        matiere::insert([
            "nom" => $_GET['nom'],
            "prof" => $_GET['prof']
        ]);
        return redirect('ajouterunprof');
    }

    public function supprimer()
    {
        matiere::where('id', '=', $_GET['id'])->delete();
        return redirect('ajouterunprof');
    }
}
