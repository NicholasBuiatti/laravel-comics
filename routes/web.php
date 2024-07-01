<?php

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
    //CREO UNA VARIABILE DATA IN CUI SALVARCI I DATI CHE SONO NELLA CARTELLA CONFIG IN STORE
    $data = config("store");
    //IMPORTO LO STORE NELLA ROTTA TRAMITE LA VARIABILE
    return view('homepage',  $data);
})->name('Home'); //DO UN NOME ALLA ROTTA COSI DA POTERLA RICHIAMARE CON QUESTA PAROLA


//CREO UNA ROTTA
Route::get('/home', function () {
    //CREO UNA VARIABILE DATA IN CUI SALVARCI I DATI CHE SONO NELLA CARTELLA CONFIG IN STORE
    $data = config("store");
    //IMPORTO LO STORE NELLA ROTTA TRAMITE LA VARIABILE
    return view('homepage', $data);
})->name('Home'); //DO UN NOME ALLA ROTTA COSI DA POTERLA RICHIAMARE CON QUESTA PAROLA


Route::get('/comicBooks', function () {
    //CREO UNA VARIABILE DATA IN CUI SALVARCI I DATI CHE SONO NELLA CARTELLA CONFIG IN STORE
    $data = config("store");
    //IMPORTO LO STORE NELLA ROTTA TRAMITE LA VARIABILE
    return view('comicBook', $data);
})->name('COMIC BOOKS'); //DO UN NOME ALLA ROTTA COSI DA POTERLA RICHIAMARE CON QUESTA PAROLA
