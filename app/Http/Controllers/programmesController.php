<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programmesController extends Controller
{
    public function index(){

        $liste_PR= programme::All();

        return view("Programme",['listes_pr'=>$liste_PR]);
    }
}
