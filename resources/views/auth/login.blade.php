<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/All.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="container shadow  mb-5 bg-white rounded">
        <div class="row">
            <div class="col-md-6 img"><img src="{{ asset('assets/images/login.png') }}" alt="" srcset="" class="w-100"></div>
            <div class="col-md-6 login">
                
                <h1>Accéder à mon compte  </h1>
                
                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf

                        <div class="form-group row">
                                <input placeholder="Email" id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                                <input placeholder="Mot de passe" id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn px-5 py-2 w-30 mt-3 mb-3">{{ __('Login') }}</button><br>
                            <span class=" px-3 m-5">Ou</span><br>
                            <a href="{{url('/login/google')}}"><i class="fab fa-google-plus-g fa-2x mr-3 iconper"></i></a>
                            <a href="{{url('/login/facebook')}}"> <i class="fab fa-facebook-f fa-2x ml-3 mt-3 iconper"></i></a>
                            
                        </div>
                    </form>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
</body>
</html>
