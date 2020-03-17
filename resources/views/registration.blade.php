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
            <!--Section: Contact v.2-->
            <div class="mb-4">

                <div class="card text-white bg-secondary my-5 py-4 text-center">
                    <div class="card-body">
                        <p class="text-white m-0 baner">Zarejestruj się</p>
                    </div>
                </div>

                <form action="{{url('post-registration')}}" method="POST" id="regForm">
                    <fieldset class="border p-2">
                        <legend  class="w-auto">Rejestracja</legend>
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="inputName" class="col-sm-4 col-form-label formularz">Nazwa użytkownika:</label>
                            <div class="col-sm-8">
                                <input class="form-control formularz" name="name" type="text" id="inputName" required placeholder="Uzupełnij nazwę użytkownika">
                            </div>
                            @error('name')
                            <div class="col-sm-8">
                                <span class="card-text kartyR">! {{ $message }} !</span>
                            </div>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-4 col-form-label formularz">Adres E-mail:</label>
                            <div class="col-sm-8">
                                <input class="form-control formularz" name="email" type="email" id="inputEmail" required placeholder="Uzupełnij E-mail">
                            </div>
                            @error('email')
                            <div class="col-sm-8">
                                <span class="card-text kartyR">! {{ $message }} !</span>
                            </div>
                            @enderror
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label formularz">Hasło:</label>
                            <div class="col-sm-8">
                                <input class="form-control formularz" name="password" type="password"  id="inputPassword" required placeholder="Uzupełnij hasło">
                            </div>
                            @error('password')
                            <div class="col-sm-8">
                                <span class="card-text kartyR">! {{ $message }} !</span>
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary przycisk1" type="submit">Zarejestruj się</button>
                        <div class="card-text kartytekst"><br/>Masz juz konto?
                            <a class="btn btn-primary btn-sm przycisk" href="{{url('login')}}">Zaloguj się</a>
                        </div>
                    </fieldset>
                </form>

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