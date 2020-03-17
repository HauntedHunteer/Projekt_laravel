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
        <link rel="stylesheet" href="<?php echo asset('css/small-business.css')?>" type="text/css"> 

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
                        <li class="nav-item active">
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
                        <li class="nav-item">
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

            <!-- Heading Row -->
            <div class="row align-items-center my-5">
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('images/amd-vs-nvidia.jpg') }}" alt="Obraz">
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-5">
                    <h1 class="font-weight-light tytul">Karty graficzne w najlepszej cenie!</h1>
                    <p class="tekst">Jesteśmy sklepem, który oferuje najlepsze karty graficzne w dogodnych cenach. Sprzedajemy karty zarówno marki NVIDIA jak i AMD. Cechuje nas szybka, darmowa dostawa oraz fachowa pomoc techniczna.<br> Jesteś nowy? - otrzymasz 5% rabatu!</p>
                    <a class="btn btn-primary przycisk" href="asortyment">Nasza oferta</a>
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.row -->

            <!-- Call to Action Well -->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0 baner">Polecane produkty</p>
                </div>
            </div>

            <!-- Content Row -->
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title kartyN">GeForce RTX 2080 Ti</h2>
                            <p class="card-text kartytekst">Najnowszy flagowy model karty graficznej firmy NVIDIA to rewolucja w sferze realizmu i wydajności w grach. Potężna architektura GPU NVIDIA Turing™, przełomowe technologie oraz 11 GB ultraszybkiej pamięci GDDR6 kolejnej generacji sprawiają, że jest to absolutnie najpotężniejszy gamingowy układ GPU na świecie.</p>
                        </div>
                        <div class="card-footer">
                            <a href="formularz" class="btn btn-primary btn-sm przycisk">Kup teraz</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title kartyN">GeForce GTX 1660 Ti</h2>
                            <p class="card-text kartytekst">Karta oparta jest na nagradzanej architekturze NVIDIA Turing™, dzięki czemu zapewnia przełomową wydajność graficzną. Oferując moc obliczeniową porównywalną z osiągami modelu GeForce GTX 1070, zapewnia ona prawdziwe turbodoładowanie we wszystkich współczesnych grach.</p>
                        </div>
                        <div class="card-footer">
                            <a href="formularz" class="btn btn-primary btn-sm przycisk">Kup teraz</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="card-title kartyR">Radeon RX 590</h2>
                            <p class="card-text kartytekst">Flagowy model karty graficznej AMD. Radeon RX 590 to najnowsza karta od AMD wykorzystująca architekturę Polaris. Jest pewną alternatywą dla układów NVIDIA w przystępnej cenie.</p>
                        </div>
                        <div class="card-footer">
                            <a href="formularz" class="btn btn-primary btn-sm przycisk">Kup teraz</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Mateusz Niemczuk 2020</p>  
            </div>
            <!-- /.container --> 
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    </body>

</html>
