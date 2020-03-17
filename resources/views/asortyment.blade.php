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
                        <li class="nav-item active">
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
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body">
                    <p class="text-white m-0 baner">Oferta</p>
                </div>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i
                            class="fas fa-chevron-left"></i></a>
                    <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i
                            class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
                    <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
                    <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides and lightbox-->

                <div class="carousel-inner mdb-lightbox" role="listbox">
                    <div id="mdb-lightbox-ui"></div>
                    <!--First slide-->
                    <div class=" carousel-item active text-center">

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full1.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini1.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full2.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini2.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full3.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini3.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full4.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini4.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>
                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full5.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini5.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>
                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full6.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini6.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item text-center">

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full7.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini7.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full8.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini8.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full9.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini9.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full10.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini10.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>
                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full11.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini11.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>
                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full12.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini12.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                    </div>
                    <!--/.Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item text-center">

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full13.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini13.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full14.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini14.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full15.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini15.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full16.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini16.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>
                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full17.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini17.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>
                        <figure class="col-md-4 d-md-inline-block karuzela">
                            <a href="images/full/full18.jpg"
                               data-size="1600x1067">
                                <img src="images/mini/mini18.jpg" alt="obrazek_karty"
                                     class="img-fluid">
                            </a>
                        </figure>

                    </div>
                    <!--/.Third slide-->

                </div>
                <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper-->
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
