@php
$titre="Dashboard"
@endphp

@extends('layouts.admin')

@section('contenu_site')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                        <a href="{{route('livres.ajout')}}" class="btn btn-primary">Ajouter un Livre</a>
                            <a href="" class="btn btn-success">Liste des Livres</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
