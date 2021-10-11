<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use App\Models\table;
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
}
