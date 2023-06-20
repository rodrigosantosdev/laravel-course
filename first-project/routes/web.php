<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeriesController;


// rota pagina home
Route::get('/', function () {
    return view('home');
});

// rota series.
// Route::get('/series', [SeriesController::class, 'index']);

// rota para pagina de criar series
// Route::get('/series/criar', [SeriesController::class, 'create']);

// rota para fazer o metodo post inclusão de series no banco de dados. STORE.
// Route::post('/series/cadastrar', [SeriesController::class, 'store']);

// forma de rota em grupo. para evitar de ficar chamando a controller no paramentro.
Route::controller(SeriesController::class)->group(function (){
  Route::get('/series', 'index');
  Route::get('/series/criar', 'create');
  Route::post('/series/cadastrar', 'store');
});