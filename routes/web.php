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
    return view('pages.front-office.welcome');
})->name("welcome");

Route::get('/accueil', function () {
    return view('pages.front-office.accueil');
})->name("accueil");

Route::get('/contact', function () {
    return view('pages.front-office.contact');
})->name("contact");

Route::get('/produits', function () {
    return view('pages.front-office.produits');
})->name("produits");

Route::get('/moncompte', function () {
    return view('pages.front-office.moncompte');
})->name("moncompte");