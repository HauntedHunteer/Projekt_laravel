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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
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
                        <li class="nav-item active">
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
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0 baner">Zamów swoją wymarzoną kartę</p>
                </div>
            </div>
            <form method="post" action="{{url('post-zamowienie')}}">

                <fieldset class="border p-2">
                    <legend  class="w-auto">Dane kontaktowe</legend>
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="Imie" class="col-sm-4 col-form-label formularz">Imię:</label>
                        <div class="col-sm-8">
                            <input class="form-control formularz" type="text" id="Imie" pattern="(^([A-ZĄĆĘŁŃÓŚŻŹ]){1})+[a-ząćęłńóśżź]*$" maxlength="15" required placeholder="Uzupełnij imie" name="forename">
                        </div>
                        @error('forename')
                        <div class="col-sm-8">
                            <span class="card-text kartyR">! {{ $message }} !</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="Nazwisko" class="col-sm-4 col-form-label formularz">Nazwisko:</label>
                        <div class="col-sm-8">
                            <input class="form-control formularz" type="text" id="Nazwisko" pattern="(^([A-ZĄĆĘŁŃÓŚŻŹ]){1})+[a-ząćęłńóśżź]*$" maxlength="30" required placeholder="Uzupełnij nazwisko" name="name">
                        </div>
                        @error('name')
                        <div class="col-sm-8">
                            <span class="card-text kartyR">! {{ $message }} !</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="Mail" class="col-sm-4 col-form-label formularz">E-mail:</label>
                        <div class="col-sm-8">
                            <input class="form-control formularz" type="email" id="Mail" maxlength="100" required placeholder="Uzupełnij e-mail" name="email">
                        </div>
                        @error('email')
                        <div class="col-sm-8">
                            <span class="card-text kartyR">! {{ $message }} !</span>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="Tel" class="col-sm-4 col-form-label formularz">Nr telefonu:</label>
                        <div class="col-sm-8">
                            <input class="form-control formularz" type="tel" id="Tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" maxlength="11" required placeholder="Uzupełnij nr telefonu w postaci XXX-XXX-XXX" name="tel_number">
                        </div>
                        @error('tel_number')
                        <div class="col-sm-8">
                            <span class="card-text kartyR">! {{ $message }} !</span>
                        </div>
                        @enderror
                    </div>
                </fieldset>
                <fieldset class="border p-2">
                    <legend  class="w-auto">Metody płatości</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payments_methods" id="Radio1" value="PayPal" checked>
                        <label class="form-check-label formularz" for="Radio1">PayPal</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payments_methods" id="Radio2" value="DotPay">
                        <label class="form-check-label formularz" for="Radio2">DotPay</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payments_methods" id="Radio3" value="Przelew">
                        <label class="form-check-label formularz" for="Radio3">Przelew</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payments_methods" id="Radio4" value="Karta">
                        <label class="form-check-label formularz" for="Radio4">Karta</label>
                    </div>
                </fieldset>
                <fieldset class="border p-2">
                    <legend  class="w-auto">Wybór produktu</legend>
                    @error('products')
                    <div class="col-sm-8">
                        <span class="card-text kartyR">! {{ $message }} !</span>
                    </div>
                    @enderror
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="AORUS GeForce RTX 2080 Ti;6400" id="K1" name="products[]">
                        <label class="custom-control-label formularz" for="K1">AORUS GeForce RTX 2080 Ti</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="MSI GeForce RTX 2080 Ti;5400" id="K2" name="products[]">
                        <label class="custom-control-label formularz" for="K2">MSI GeForce RTX 2080 Ti</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Zotac GeForce RTX 2080;4100" id="K3" name="products[]">
                        <label class="custom-control-label formularz" for="K3">Zotac GeForce RTX 2080</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Gigabyte GeForce RTX 2080;3700" id="K4" name="products[]">
                        <label class="custom-control-label formularz" for="K4">Gigabyte GeForce RTX 2080</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Gigabyte GeForce RTX 2070;2200" id="K5" name="products[]">
                        <label class="custom-control-label formularz" for="K5">Gigabyte GeForce RTX 2070</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="MSI GeForce RTX 2070;2200" id="K6" name="products[]">
                        <label class="custom-control-label formularz" for="K6">MSI GeForce RTX 2070</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Palit GeForce RTX 2060;1600" id="K7" name="products[]">
                        <label class="custom-control-label formularz" for="K7">Palit GeForce RTX 2060</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Gainward GeForce RTX 2060;1860" id="K8" name="products[]">
                        <label class="custom-control-label formularz" for="K8">Gainward GeForce RTX 2060</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="MSI GeForce GTX 1660 Ti;1400" id="K9" name="products[]">
                        <label class="custom-control-label formularz" for="K9">MSI GeForce GTX 1660 Ti</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Gigabyte GeForce GTX 1660 Ti;1270" id="K10" name="products[]">
                        <label class="custom-control-label formularz" for="K10">Gigabyte GeForce GTX 1660 Ti</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="MSI GeForce GTX 1050 Ti;770" id="K11" name="products[]">
                        <label class="custom-control-label formularz" for="K11">MSI GeForce GTX 1050 Ti</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="ASUS GeForce GTX 1050 Ti;750" id="K12" name="products[]">
                        <label class="custom-control-label formularz" for="K12">ASUS GeForce GTX 1050 Ti</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="XFX Radeon RX 590;1120" id="K13" name="products[]">
                        <label class="custom-control-label formularz" for="K13">XFX Radeon RX 590</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="Gigabyte Radeon RX 580;870" id="K14" name="products[]">
                        <label class="custom-control-label formularz" for="K14">Gigabyte Radeon RX 580</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="ASRock Radeon VII;3500" id="K15" name="products[]">
                        <label class="custom-control-label formularz" for="K15">ASRock Radeon VII</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="MSI Radeon VII;3150" id="K16" name="products[]">
                        <label class="custom-control-label formularz" for="K16">MSI Radeon VII</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="AMD Radeon Pro WX 5100;1725" id="K17" name="products[]">
                        <label class="custom-control-label formularz" for="K17">AMD Radeon Pro WX 5100</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" value="AMD Radeon Pro SSG VEGA;21000" id="K18" name="products[]">
                        <label class="custom-control-label formularz" for="K18">AMD Radeon Pro SSG VEGA</label>
                    </div>
                    <br/>
                    <button type="submit" value="Submit" class="btn btn-primary przycisk1">Zamów</button>
                    <button type="reset" value="Reset" class="btn btn-primary przycisk1">Reset formularza</button>
                </fieldset>
            </form>

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
