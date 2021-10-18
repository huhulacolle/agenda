<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use App\Models\devoir;

class sql extends Controller
{
    
    private function setdevoirid()
    {
        $i = 0;
        $devoir = devoir::select('id')->get();
        foreach ($devoir as $sql) {
            $id[$i] = $sql -> id;
            $i++;
        }
        if (!isset($id)) {
            return 0;
        }
        return $id;
    }

    public function ajouterprof()
    {
        $i = 0;
        $id = $this->setdevoirid();
        $prof = matiere::select('*')->get();
        return view('sql.afficheprof', compact('prof', 'id', 'i'));
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
