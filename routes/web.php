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

Route::get('/', 'ProduitController@afficherPageWelcome')->name("welcome");

Route::get('/accueil', 'ProduitController@afficherPageAccueil')->name("accueil");

Route::get('/contact', 'ProduitController@afficherPageContact')->name("contact");

Route::get('/produits', 'ProduitController@afficherPageProduit')->name("produits");

Route::get('/moncompte', 'ProduitController@afficherPageCompte')->name("moncompte");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nouveau_livre', 'LivreController@afficheFormulaire')->name("livres.ajout");
Route::post('/nouveau_livre', 'LivreController@ajouterLivre')->name("livres.ajout");
