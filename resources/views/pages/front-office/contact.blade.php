<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact</title>

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
                BootCamp
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
            </div>
    </nav>
    {{-- <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
        @endif
    </div> --}}
    <section class="hero is-fullheight">
        <div class="hero-body">

            <div class="container has-text-centered">
                <div class="columns is-mobile is-centered">
                    <div class="column is-half">
                        <div class="content">
                            <div class="title m-b-md">
                                Contact
                            </div>

                            <div class="links">
                                <a href="{{ route('welcome') }}">Welcome</a>
                                <a href="{{ route('accueil') }}">Accueil</a>
                                <a href="{{ route('contact') }}">Contact</a>
                            </div>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <label class="label">Message</label>
                            <div class="control">
                                <textarea class="textarea" placeholder="Textarea"></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-link">
                                    Contact
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
