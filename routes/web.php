<?php

use App\Http\Controllers\ApprenatCOntroller;
use App\Http\Controllers\formationController;
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

Route::get('apprenant',[ApprenatCOntroller::class,'index']);
Route::get('formation',[formationController::class,'index']);
