<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Illuminate\Http\Request;

class ApprenatCOntroller extends Controller
{
    public function index(){

        $liste_AP= Apprenant::All();

        return view("Apprenant",['listes'=>$liste_AP]);
    }
}
