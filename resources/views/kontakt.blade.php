<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Helix</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Da&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet"> 
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo asset('css/small-business.css') ?>" type="text/css">

    </head>
    <body class="tlo">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand logo" href="startowa">HELIX</a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        @auth
                        <li class="nav-item">
                            <p class="nav-link menu" style = "font-family: 'Quicksand', sans-serif; color: #007bff;"> {{ Auth()->user()->name }} </p>
                        </li>
                        @endauth
                        <li class="nav-item">
                            <a class="nav-link menu" href="startowa">O nas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="asortyment">Asortyment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu" href="formularz">Zamów teraz</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link menu" href="zamowienia">Moje zamówienia</a>
                        </li>
                        @endauth
                        <li class="nav-item active">
                            <a class="nav-link menu" href="kontakt">Kontakt</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link menu" style = "color: #ff0000;" href="logout">Wyloguj</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link menu" style = "color: #00cc00;" href="login">Zaloguj</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <div class="container">
            <!--Section: Contact v.2-->
            <div class="mb-4">

                <div class="card text-white bg-secondary my-5 py-4 text-center">
                    <div class="card-body">
                        <p class="text-white m-0 baner">Kontakt</p>
                    </div>
                </div>
                <p class="text-center w-responsive mx-auto mb-5 tekst">Masz jakieś pytania? Skontaktuj się z nami.</p>
                <p class="text-center w-responsive mx-auto mb-5 kartytekst">Chełm, ul. Lubelska 52</p>
                <p class="text-center w-responsive mx-auto mb-5 kartytekst">694-256-644</p>
                <p class="text-center w-responsive mx-auto mb-5 kartytekst">helix@interia.eu</p> 
            </div>
            <!--Section: Contact v.2-->
            <div id="lista" class="container"></div>
            <div id="opis" class="container">
                <p class="text-center w-responsive mx-auto mb-5 tekst">Strona utworzona za pomocą Framework'ów Bootstrap i Laravel. <br/> Zdjęcia oraz specyfikacje kart graficznych zostały zaczerpnięte ze strony x-kom.pl.</p>
            </div>
        </div>
        <!-- /.container -->
        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <div class="container">
                    <p class="m-0 text-center text-white">Copyright &copy; Mateusz Niemczuk 2020</p>
                </div>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
