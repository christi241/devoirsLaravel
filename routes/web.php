<?php

use App\Http\Controllers\ApprenatCOntroller;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\electeurController;
use App\Http\Controllers\formationController;
use App\Http\Controllers\programmesController;
use App\Http\Controllers\secteurController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cand', function () {
    return view('candidats/create');
});


Route::get('apprenant',[ApprenatCOntroller::class,'index']);
Route::get('formation',[formationController::class,'index']);
Route::get('Candidat',[CandidatController::class,'index']);
Route::get('Electeur',[electeurController::class,'index']);
Route::get('Programe',[programmesController::class,'index']);
Route::get('Secteure',[secteurController::class,'index']);

