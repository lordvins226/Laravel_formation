<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

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
                <div class="column is-4 is-offset-4">
                    <div class="content">
                        <div class="title m-b-md">
                            Welcome
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-square">
                                <img src="https://avatars1.githubusercontent.com/u/39868202?s=460&u=41f645d9e237f22e1e20281a1894303c41208739&v=4"
                                    alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    <figure class="image is-48x48">
                                        <img src="https://avatars1.githubusercontent.com/u/39868202?s=460&u=41f645d9e237f22e1e20281a1894303c41208739&v=4"
                                            alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="media-content">
                                    <p class="title is-4">Kevin Wilfried</p>
                                    <p class="subtitle is-6">@lordvins226</p>
                                </div>
                            </div>

                            <div class="content">
                                I am enthusiastic about mobile development and Blockchain. I want to make people life
                                better using tech. A computer systems and network student interested in challenges which
                                require designing solutions that can make a significant impact in people lives like
                                blockchain and DApps.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
