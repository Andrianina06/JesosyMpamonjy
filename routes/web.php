<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\Admin\EgliseController;
use App\Http\Controllers\Admin\EquipeController;
use App\Http\Controllers\Admin\FonctionController;
use App\Http\Controllers\Admin\EvenementController;
use App\Http\Controllers\Admin\AffectationController;
use App\Http\Controllers\Admin\GestionTransportController;
use App\Http\Controllers\Admin\VehiculeController;

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

Route::prefix('JesosyMpamonjy/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/acceuil', [UserController::class, 'index'])->name('user.index');
    Route::get('/eglise', [UserController::class, 'getAllEglise'])->name('userEglise.index');
    Route::get('/eglise/{eglise}', [UserController::class, 'showEglise'])->name('userEglise.show');
    Route::get('/evenement', [UserController::class, 'getAllEvenement'])->name('userEvenement.index');
    Route::get('/evenement/{evenement}', [UserController::class, 'showEvenement'])->name('userEvenement.show');
    Route::post('/evenement/{evenement}', [UserController::class, 'inscription'])->name('userEvenement.participate');
    Route::resource('personne', PersonneController::class)->except('show');
    Route::prefix('admin/')->group(function () {
        Route::resource('fonction', FonctionController::class)->except(['show', 'edit', 'create']);
        Route::resource('eglise', EgliseController::class)->except(['show']);
        Route::resource('affectation', AffectationController::class)->except(['show', 'edit', 'create']);
        Route::resource('evenement', EvenementController::class);
        Route::resource('equipe', EquipeController::class)->except(['show']);
        Route::resource('vehicule', VehiculeController::class)->except(['show']);
        Route::get('gestion/{evenement}', [GestionTransportController::class, 'index'])->name('gestion.index');
        Route::get('gestion/create/{evenement}', [GestionTransportController::class, 'create'])->name('gestion.create');
        Route::post('gestion/{evenement}', [GestionTransportController::class, 'store'])->name('gestion.store');
        Route::get('gestion/edit/{evenement}/{gestion}', [GestionTransportController::class, 'edit'])->name('gestion.edit');
        Route::patch('gestion/{evenement}', [GestionTransportController::class, 'update'])->name('gestion.update');
        Route::delete('gestion/{evenement}', [GestionTransportController::class, 'destroy'])->name('gestion.destroy');
    });
});
