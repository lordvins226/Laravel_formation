<?php

namespace App\Http\Controllers;

use App\Livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LivreController extends Controller
{
    public function afficheFormulaire()
    {
        // $titreController = "Accueil";
        return view('pages.back-office.livres.ajout');
    }

    public function ajouterLivre(Request $request)
    {
        dd($request);

        $livre = Livre::create([
            'titre' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image')->store('galerie'),
            'user_id' => Auth::user()->id,
        ]);
        $connecte = 
        session()->flash('message', 'Felicitation, Livre ajouté avec success');
        return view('pages.back-office.livres.ajout');
    }
}
