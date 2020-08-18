<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produit;

class ProduitController extends Controller
{
    public function afficherPageProduit(){
        $titreController = "Catalogue titre";

        $les_produit = Produit::paginate(10);

        return view('pages.front-office.produits', compact('titreController','les_produit'));
    }
    public function afficherPageAccueil(){
        $titreController = "Accueil";
        return view('pages.front-office.accueil', compact('titreController'));
    }
    public function afficherPageWelcome(){
        $titreController = "Welcome";
        return view('pages.front-office.welcome', compact('titreController'));
    }
    public function afficherPageContact(){
        $titreController = "Contact";
        return view('pages.front-office.contact', compact('titreController'));
    }
    public function afficherPageCompte(){
        $titreController = "Compte";
        return view('pages.front-office.moncompte', compact('titreController'));
    }
}
