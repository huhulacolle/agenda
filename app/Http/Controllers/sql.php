<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sql extends Controller
{

    public function ajouterprof()
    {
        $prof = matiere::select('*')->get();
        return view('sql.afficheprof', compact('prof'));
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
