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

Route::get('/', function () {
    return view('start');
});

Route::get('/kosmetyka', function()
{
    return view('kosmetyka');
});

Route::get('/medycyna', function()
{
    return view('medycyna');
});

Route::get('/kontakt', function()
{
    return view('kontakt');
});

Route::view('/cennik', 'cennik');
Route::post('cennik', [cennikForm::class, 'cennik']);

Route::any('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
