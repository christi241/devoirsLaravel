<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function index(){

        $liste_Ca = Candidat::all();

        return view("candidats/Candidat",['listes_Ca'=>$liste_Ca]);
    }
}
