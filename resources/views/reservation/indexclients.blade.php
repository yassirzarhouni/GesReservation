

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
    
    <h1>Liste de mes réservations</h1>
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

<div class="uk-overflow-auto">
    <table  id="myTable" class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink">Date debut de reservation</th>
                <th class="uk-table-shrink">Date fin de reservation</th>
                <th class="uk-table-shrink">Hotel id</th>
                <th class="uk-table-shrink">nombre de personnes</th>
                <th class="uk-table-shrink">Statut</th>
                <th class="uk-table-shrink">actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($listReservation as $reservation)
            <tr>
                
                <td class="uk-text-nowrap">{{$reservation->datedebut}}</td>
                <td class="uk-text-nowrap">{{$reservation->datefin}}</td>
                <td class="uk-text-nowrap">
                <a href="{{url('/home/hotel/'.$reservation->hotel_id)}}">{{$reservation->hotel_id}}</a>
                </td>
                <td class="uk-text-nowrap">{{$reservation->nbrpersonne}}</td>
                <td class="uk-text-nowrap">{{$reservation->staut}}</td>
                <td class="uk-text-nowrap">
                <form action="{{url('/home/reservation/'.$reservation->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('DELETE')}}
            
                <button type="submit" class="uk-button uk-button-danger">Supprimer</button>
                </form>
                </td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>



    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
   
    </script>
</body>
</html>

