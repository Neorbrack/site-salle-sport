<?php

use App\Http\Controllers\MainController;
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
Route::get('/', [MainController::class, 'index'])->name('main.index');

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/cours', function () {
    return view('cours');
});

Route::get('/tarifs', function () {
    return view('tarif');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
});

Route::get('/AccueilController', [MainController::class, 'AccueilController'])->name('main.accueil');

Route::get('/cours', [MainController::class, 'CoursController'])->name('main.cours');

Route::get('/tarifs', [MainController::class, 'TarifsController'])->name('main.tarifs');

Route::get('/Contact', [MainController::class, 'ContactController'])->name('main.contact');

Route::get('/mentions-legales', [MainController::class, 'MentionsLegalesController'])->name('main.mentions-legales');










