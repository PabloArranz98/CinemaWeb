<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\Admin\PeliculaController;
use App\Http\Controllers\Admin\SeriesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;


Route::get('',[HomeController::class, 'index'] )->name('admin.home');

Route::resource('generos', GeneroController::class )->names('admin.generos');

Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('pelicula', PeliculaController::class)->names('admin.peliculas');

Route::resource('series', SeriesController::class)->names('admin.series');

Route::resource('noticias', NoticiasController::class)->names('admin.noticias');
