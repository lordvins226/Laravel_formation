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
    return view('welcome');
})->name("welcome");

Route::get('/accueil', function () {
    return view('accueil');
})->name("accueil");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/produits', function () {
    return view('produits');
})->name("produits");