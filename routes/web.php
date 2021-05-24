<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('PeliculasIndex', [PeliculasController::class,'index'])->name('peliculas.index');

Route::get('peliculas/{pelicula}', [PeliculasController::class,'show'])->name('peliculas.show');

Route::get('ValoracionesIndex',  [PeliculasController::class,'ValoracionesPeliculas'])->name('peliculas.valoracion');


Route::get('ValoracionesIndex/{valoracion}', [PeliculasController::class, 'VInfo'])->name('peliculas.criticas');
    

Route::post('peliculas/valoraciones',  [PeliculasController::class,'store'])->name('peliculas.store')->middleware('auth');

Route::get('generos/{genero}',[PeliculasController::class,'GeneroPeliculas'])->name('peliculas.genero');


Route::get('SeriesIndex', [SeriesController::class,'SeriesIndex'])->name('series.index');

Route::get('series/{serie}', [SeriesController::class,'showSeries'])->name('series.show');

Route::get('Valoracionesindex',  [SeriesController::class,'ValoracionesSeries'])->name('series.valoracion');

Route::get('ValoracionesSeries/{valorac}', [SeriesController::class, 'Vinfo'])->name('series.criticas');

Route::post('series/valoraciones',  [SeriesController::class,'store'])->name('series.store')->middleware('auth');

Route::get('Genero/{Generos}',[SeriesController::class,'GeneroSeries'])->name('series.genero');


Route::get('NoticiasIndex',  [NoticiasController::class , 'NoticiasIndex'])->name('noticias.index');

Route::get('Noticias/{noticias}',  [NoticiasController::class , 'ShowNoticias'])->name('noticias.show');

Route::get('Comentarios/{comentario}',  [NoticiasController::class,'Comentarios'])->name('noticias.comentarios');

Route::post('noticias/comentario',  [NoticiasController::class,'store'])->name('noticias.store')->middleware('auth');

Route::get('contactanos',[ContactanosController::class,'index'] )->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class,'store'] )->name('contactanos.store')->middleware('auth');
    



    




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



