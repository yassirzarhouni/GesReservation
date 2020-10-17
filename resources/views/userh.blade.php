@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection()
@section('content')
<div class="container">
    
    <h1>Mon compte</h1>

    
        <div class="donnee">
            
             <p class="second">Email: </p> 
            <p class="first">yassirzhn98@gmail.com</p>
            <p class="second">Situation maritale:</p>
            <p class="first">célibataire</p>
            <p class="second">Derniére réservation:</p>
            <p class="first">20/09/2020</p> 
            <p class="second">Points:</p>
            <p class="first">2</p>   

            <a href="" class="btn btn-primary">demande de modification</a>
        </div>
    
</div>

@endsection()