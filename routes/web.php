<?php

use App\Http\Controllers\ActualitesController;
use App\Http\Controllers\demandeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\visitorController;


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


Route::get('/', [visitorController::class, 'index'])->name('VPage');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//--------------------------------admin---------------------------------------

Route::get('/profile_admin', [HomeController::class, 'profile_admin'])->name('profile_admin');
Route::get('/settings_admin', [HomeController::class, 'settings_admin'])->name('settings_admin');

//-------------------------------actualites---------------------------------

Route::get('/actualites', [ActualitesController::class, 'show'])->name('actual.show');
Route::post('/actualites/store', [ActualitesController::class, 'store'])->name('actual.store');
Route::get('/actualites/{id}', [ActualitesController::class, 'delete'])->name('actual.delete');

//---------------------------------demande-----------------------------------------

Route::get('/demandes/create', [demandeController::class, 'create'])->name('demandes.create');

