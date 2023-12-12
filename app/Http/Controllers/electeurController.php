<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class electeurController extends Controller
{
    public function index(){

        $liste_El= electeur::All();

        return view("Electeur",['liste_EL'=>$liste_El]);
    }
}
