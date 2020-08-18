<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$titre}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }


        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('welcome') }}">
                Formation
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ route('accueil') }}">
                    Accueil
                </a>
                <a class="navbar-item" href="{{ route('contact') }}">
                    Contact
                </a>
                <a class="navbar-item" href="{{ route('produits') }}">
                     Produits
                </a>
                <a class="navbar-item" href="{{ route('moncompte') }}">
                   <i class="fa fa-user" aria-hidden="true"></i> Mon Compte
                </a>
            </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-3 text-center">{{$titre}}</h1>
        </div>
    </div>
    @yield('contenu_site')

</body>
<footer>
    <div class="jumbotron">
        <div class="container">
            <p class="text-center">Copyright 2020 - Formation</p>
        </div>
    </div>
</footer>
</html>
