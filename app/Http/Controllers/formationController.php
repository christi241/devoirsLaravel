<?php

namespace App\Http\Controllers;

use App\Models\formation;
use Illuminate\Http\Request;

class formationController extends Controller
{
    public function index(){

        $liste_fo= formation::All();

        return view("formation",['listes'=>$liste_fo]);
    }

}
