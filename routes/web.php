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

Route::get('/comicBooks/{id}', function ($id) {

    $comics = config("store.booksList"); // .fumetti ???
    //CONTROLLO CHE L'ID SIA TRA 0 E 11
    if ($id >= 0 && $id < count($comics)) {
        //SE C'è LO MANDO NEL DATA CHE CONTIENE IL FUMETTO SOTTO COMIC
        $data = [
            "comic" => $comics[$id]
        ];
    } else {
        // ALTRIMENTI LO MANDO NEL DATA CHE CONTIENE LA VOCE ERRORE CHE CONTIENE UNA STRINGA
        $data = [
            'errore' => '404 fumetto non trovato'
        ];
    };



    return view('detailsBook', $data);
})->name('Book details');
