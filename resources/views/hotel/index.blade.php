

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
            <div class="nav-text"><a href="{{url('/home/vehicule')}}">les réservations</a> </div>
            <div class="nav-text"><a href="{{url('/admin/users')}}">les utilisateurs</a> </div>
            <div class="nav-text"><a href="{{url('/admin/hotel')}}">les hôtelss</a> </div>
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
    <div class="pull-right">
        <a href="{{url('/admin/hotel/ajout')}}" class="btn btn-primary">Ajouter hôtel</a>
    </div>
    <h1>Gestion des hôtels</h1>
</div>

<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Recherche...">
            </form>
        </div>

    </div>
</nav>

<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
            <th class="uk-table-shrink">id</th>
                <th class="uk-table-shrink">nom d'hôtel</th>
                <th class="uk-table-shrink">ville</th>
                <th class="uk-table-shrink">prix/nuit</th>
                <th class="uk-table-shrink">nombre de personnes max</th>
                <th class="uk-table-shrink">actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($listhotel as $hotel)
            <tr>
                <td class="uk-text-nowrap">{{$hotel->id}}</td>
                <td class="uk-text-nowrap">{{$hotel->titre}}</td>
                <td class="uk-text-nowrap">{{$hotel->ville}}</td>
                <td class="uk-text-nowrap">{{$hotel->price}}</td>
                <td class="uk-text-nowrap">{{$hotel->price}}</td>
                
                <td class="uk-text-nowrap">
                <button class="uk-button uk-button-default" type="button">Afficher</button>
                <button class="uk-button uk-button-primary" type="button">Modifier</button>
                <button class="uk-button uk-button-danger" type="button">Supprimer</button>
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
</body>
</html>

