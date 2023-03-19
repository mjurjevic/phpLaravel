<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerminController;

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

Route::get('/',[TerminController::class,'pocetna'])->name('pocetna');
Route::get('/zakazi',[TerminController::class,'zakazi'])->name('zakazi');
Route::post('/zakazi',[TerminController::class,'prihvatiZakazi'])->name('prihvati-zakazi');

Route::get('/admin',[TerminController::class,'adminPocetna'])->middleware(['auth'])->name('admin-pocetna');
Route::get('/admin/zakazi/{id}',[TerminController::class,'adminZakazi'])->middleware(['auth'])->name('admin-zakazi');
Route::post('/admin/zakazi/{id}',[TerminController::class,'adminIzmeni'])->middleware(['auth'])->name('admin-izmeni');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
