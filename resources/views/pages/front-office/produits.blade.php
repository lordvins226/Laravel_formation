@php
$titre = $titreController
@endphp
@extends('layouts.master')

@section('contenu_site')


    <div class="container">
        <div class="row">
            <div class="col-md-12 pb-5 pt-5">
                @if ($les_produit->count() > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Categorie</th>
                                <th>Prix</th>
                                <th>Origine</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($les_produit as $produit)
                                <tr>
                                    <td>{{ $produit->nom }}</td>
                                    <td>{{ $produit->categorie }}</td>
                                    <td>{{ $produit->prix }}</td>
                                    <td>{{ $produit->origine }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $les_produit->links() }}
                @else
                    <p>Aucun Produit</p>
                @endif
            </div>
        </div>
    </div>
@endsection
