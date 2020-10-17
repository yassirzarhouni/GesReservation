

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
    <link rel="stylesheet" href="{{ asset('assets/css/ajouter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <title>Document</title>
</head>
<body>
<button id="toggler-per" class=" uk-button uk-button-default uk-margin-small-right " type="button" uk-toggle="target: #offcanvas-nav-primary">menu</button>
<div id="offcanvas-nav-primary" uk-offcanvas="mode: push;overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <div class="nav-text"><a href="">les réservations</a> </div>
            <div class="nav-text"><a href="{{url('/admin/users')}}">les utilisateurs</a> </div>
            <div class="nav-text"><a href="{{url('/admin/hotel/ajout')}}">les hôtelss</a> </div>
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

<div class="container">
<h1>Modification d'un hotel</h1>

    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/admin/hotel/'.$hotel->id)}}" method="post">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="">titre:</label>
                    <input type="text" class="form-control" name="titre" value="{{$hotel->titre}}">
                </div>
                <div class="form-group">
                    <label for="">description :</label>
                    <textarea name="presentation" class="form-control" id="" cols="30" rows="10">{{$hotel->presentation}}</textarea>
                    
                </div>
                <div class="form-group">
                    <label for="">ville :</label>
                    <input type="text" class="form-control" name="ville" value="{{$hotel->ville}}">
                </div>
                <div class="form-group">
                    <label for="">prix:</label>
                    <input type="text" class="form-control" name="prix" value="{{$hotel->price}}">
                </div>
                <div class="form-group">
                    <label for="">max de personnes:</label>
                    <input type="text" class="form-control" name="max" value="{{$hotel->hotPrice}}">
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-primary"  value="enregistrer" >
                </div>
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

