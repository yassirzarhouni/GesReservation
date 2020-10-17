

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <title>Document</title>
</head>
<body>
<button id="toggler-per" class=" uk-button uk-button-default uk-margin-small-right " type="button" uk-toggle="target: #offcanvas-nav-primary">menu</button>
<div id="offcanvas-nav-primary" uk-offcanvas="mode: push;overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <div class="nav-text"><a href="{{url('/home/')}}">Les Hôtels</a></div>
            <div class="nav-text"><a href="{{url('/home/Mesreservations')}}">Mes réservations</a></div>
            <div class="nav-text">
                    <a class="" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('déconnecter') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </ul>

    </div>
    
</div>
<div class="uk-container ">
    <div>
    
    <h1>liste des hôtels</h1>
    </div>
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input id="myInput" class="uk-search-input" type="search" placeholder="Recherche...">
            </form>
        </div>
    </div>
</nav>
<div></div>


@foreach ($listhotel as $hotel)
    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
        <div class="uk-card-media-left uk-cover-container">
            <img src="{{ asset('assets/images/'.$hotel->image1) }}" alt="" uk-cover>
            <canvas width="300" height="200"></canvas>
        </div>
        <div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">{{$hotel->titre}}-{{$hotel->ville}}</h3>
                <p>{{substr($hotel->presentation, 0, 50)}}..</p>
                <p>PRIX :{{$hotel->price}}</p>
            </div>
            <div class="uk-card-footer">
                <a href="{{url('/home/hotel/'.$hotel->id)}}" class="uk-button uk-button-text">Afficher la suite</a>
            </div>
            
        </div>
    </div>
    @endforeach
</div>



    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $(".uk-card").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    });
    </script>
</body>
</html>

