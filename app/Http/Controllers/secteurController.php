<?php

namespace App\Http\Controllers;

use App\Models\Programmes;
use Illuminate\Http\Request;
use App\Models\Secteur;

class secteurController extends Controller
{
    public function index(){

        $liste_S = Programmes::All();

        return view("secteurs/Secteure",['listes_S'=>$liste_S]);
    }
}
