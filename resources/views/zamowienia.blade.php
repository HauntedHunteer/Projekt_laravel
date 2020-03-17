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
                        <li class="nav-item active">
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
                        <p class="text-white m-0 baner">Moje zamówienia</p>
                    </div>
                </div>
                @if ($orders->isEmpty())
                <h1 class="font-weight-light tytul text-center">Nie złożono zamówień</h1>
                <br/><p></p>
                <br/><p></p>
                <br/><p></p>
                <br/><p></p>
                <br/><p></p>
                <br/><p></p>
                <br/><p></p>
                @else
                <div class="table-responsive">
                <table class="table w-auto table-bordered kartytekst">
                    <thead>
                        <tr>
                            <th scope="col">Imię</th>
                            <th scope="col">Nazwisko</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Nr telefonu</th>
                            <th scope="col">Metoda płatości</th>
                            <th scope="col">Produkty</th>
                            <th scope="col">Kwota [PLN]</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ostatnia modyfikacja</th>
                            <th scope="col">Modyfikacja zamówienia</th>
                            <th scope="col">Rezygnacja z zamówienia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->forename }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->tel_number }}</td>
                            <td>{{ $order->payments_methods }}</td>
                            <td>${{ $order->products }}</td>
                            <td>${{ $order->amount }}</td>
                            <td>${{ $order->status }}</td>
                            <td>${{ $order->updated_at }}</td>
                            <td><form method="post" action="{{url('post-modyfikuj')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $order->id }}">
                                    <button type="submit" value="Submit" class="btn btn-primary przycisk1">Edytuj</button>
                                </form></td>
                            <td><form method="post" action="{{url('post-usun')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $order->id }}">
                                    <button type="submit" value="Submit" class="btn btn-primary przycisk1">Zrezygnuj</button>
                                </form></td>
                        </tr>
                        @endforeach          
                    </tbody>
                </table>
                    <br/><p></p>
                @endif
            </div>   
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