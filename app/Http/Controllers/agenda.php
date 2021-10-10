<?php

namespace App\Http\Controllers;

use App\Models\matiere;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class agenda extends Controller
{
    public function affiche()
    {
        $affiche = matiere::select('*')->get();
        return view('main', compact('affiche'));
    }
}
