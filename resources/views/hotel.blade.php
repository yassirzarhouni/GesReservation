

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
    <link rel="stylesheet" href="{{ asset('assets/css/formBook.css') }}">
    <title>Document</title>
</head>
<body>
<button id="toggler-per" class=" uk-button uk-button-default uk-margin-small-right " type="button" uk-toggle="target: #offcanvas-nav-primary">menu</button>
<div id="offcanvas-nav-primary" uk-offcanvas="mode: push;overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <div class="nav-text"><a href="{{url('/home/vehicule')}}">les hotels</a> </div>
            <div class="nav-text"><a href="{{url('/home/assur')}}">mes reservation</a> </div>
            <div class="nav-text"><a href="{{url('/home/profile')}}">Mon profile</a> </div>
            
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
<div class="uk-container">
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">

    <ul class="uk-slider-items uk-grid">
        
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="{{ asset('assets/images/5.png') }}" alt="">
                <div class="uk-position-center uk-panel"><h1>1</h1></div>
            </div>
        </li>
        <li class="uk-width-3-4">
            <div class="uk-panel">
                <img src="{{ asset('assets/images/6.png') }}" alt="">
                <div class="uk-position-center uk-panel"><h1>2</h1></div>
            </div>
        </li>
        
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>

<h1>{{$hotel->titre}}</h1>
<h3>{{$hotel->presentation}}</h3>
<h3>Prix:   {{$hotel->price}}</h3>
<h3>nombre de personnes max:    {{$hotel->hotPrice}}</h3>
<div class="cover">
       <form class="flex-form" action="{{url('/home/hotel/'.$hotel->id)}}" method="post">
       {{csrf_field()}}
          
          <label for="from">je veux reserver de :</label>
          <input type="date" name="datedebut">
          
          <label for="to">à :</label>
          <input type="date" name="datefin">
          
          <span>nombre de personnes :</span>
          <select name="nbrpersonne">
             <option value="1">1 personne</option>
             <option value="2">2 personne</option>
             <option value="3">3 personne</option>
             <option value="4">4 personne</option>
             <option value="5">5 personne</option>
          </select>
          
          <input type="submit" value="Réserver" class="cta">
       </form>
    </div>
                </div>
    </div>


    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>

