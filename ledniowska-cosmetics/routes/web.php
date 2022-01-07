<?php

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

/* Start */
Route::get('/', [App\Http\Controllers\TrescController::class, 'start']);

/* Usługi */
// Kosmetyka
Route::get('/kosmetyka', [App\Http\Controllers\TrescController::class, 'kosmetyka']);

// Medycyna
Route::get('/medycyna', [App\Http\Controllers\TrescController::class, 'medycyna']);

/* Kontakt */
Route::get('/kontakt', function()
{
    return view('kontakt');
});

/* Galeria */
Route::get('/pelna_galeria', [App\Http\Controllers\TrescController::class, 'galeria']);

/* Cennik */
Route::get('/cennik', [App\Http\Controllers\TrescController::class, 'cennik']);

/* CMS */ 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// users
Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('delete-records','DeleteUserController@index');
Route::get('delete/{id}', [App\Http\Controllers\DeleteUserController::class, 'destroy']);
Route::get('users/edytuj_uzytkownika/{id}', [App\Http\Controllers\UserController::class, 'showData']);
Route::post('users/edytuj_uzytkownika', [App\Http\Controllers\UserController::class, 'update']);

//  uslugi
Route::get('uslugi', [App\Http\Controllers\ServicesController::class, 'index']);
Route::get('uslugi/dodaj_usluge', [App\Http\Controllers\ServicesController::class, 'create'])->name('uslugi.dodaj_usluge');
Route::post('uslugi/zapisz_usluge', [App\Http\Controllers\ServicesController::class, 'store'])->name('uslugi.zapisz');
Route::get('uslugi/edytuj_usluge/{id}', [App\Http\Controllers\ServicesController::class, 'showData']);
Route::put('uslugi/zaktualizuj/{id}', [App\Http\Controllers\ServicesController::class, 'update']);
Route::get('delete/uslugi/{id}', [App\Http\Controllers\ServicesController::class, 'destroy']);

// treść
Route::get('tresc', [App\Http\Controllers\TrescController::class, 'index']);
Route::get('tresc/edytuj_tresc/{id}', [App\Http\Controllers\TrescController::class, 'showData']);
Route::post('tresc/edytuj_tresc', [App\Http\Controllers\TrescController::class, 'update']);

// galeria
Route::get('galeria', [App\Http\Controllers\GaleriaController::class, 'index']);
Route::get('galeria/dodaj_zdjecie', [App\Http\Controllers\GaleriaController::class, 'create'])->name('galeria.dodaj_zdjecie');
Route::post('galeria/zapisz_zdjecie', [App\Http\Controllers\GaleriaController::class, 'store'])->name('galeria.zapisz');
Route::get('galeria/delete/{id}', [App\Http\Controllers\GaleriaController::class, 'destroy']);

// cennik 
Route::get('cms-cennik', [App\Http\Controllers\CennikController::class, 'index']);
Route::get('cennik/dodaj_zabieg', [App\Http\Controllers\CennikController::class, 'create'])->name('cennik.dodaj_zabieg');
Route::post('cennik/zapisz_zabieg', [App\Http\Controllers\CennikController::class, 'store'])->name('cennik.zapisz');
Route::get('cennik/edytuj_zabieg/{id}', [App\Http\Controllers\CennikController::class, 'showData']);
Route::put('cennik/zaktualizuj/{id}', [App\Http\Controllers\CennikController::class, 'update']);
Route::get('cennik/delete/{id}', [App\Http\Controllers\CennikController::class, 'destroy']);