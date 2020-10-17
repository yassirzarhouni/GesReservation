@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection()
@section('content')
<div class="container">
    
    <h1>details généraux d'assurance :</h1>
        <div class="donnee">
                <div class="fo">
                    <p class="first">Immatriculation du véhicule :</p>
                    <p class="second">{{$vehicule->matricul}}</p>
                    <p class="first">Marque du véhicule :</p>
                    <p class="second">{{$vehicule->Marque}}</p>
                    <p class="first">Modèle du véhicule :</p>
                    <p class="second">{{$vehicule->modele}}</p>
                    <p class="first">Carrosserie du véhicule :</p>
                    <p class="second">{{$vehicule->carrosserie}}</p>
                    <p class="first">Carburant du véhicule :</p>
                    <p class="second">{{$vehicule->Carburant}}</p>
                    <p class="first">Puissance fiscale du véhicule :</p>
                    <p class="second">{{$vehicule->Puissance}}</p>
                </div>
                <div class="fo">
                    <p class="first">Date d'achat du véhicule :</p>
                    <p class="second">{{$assur->dateAcqui}}</p>
                    <p class="first">Mode d'achat du véhicule :</p>
                    <p class="second">{{$assur->madeAchat}}</p>
                </div>
                <div class="fo">
                    <p class="first">Date de début d'assurance :</p>
                    <p class="second">{{$assur->dateAssur}}</p>
                    <p class="first">Durée d'assurance :</p>
                    <p class="second">{{$assur->dureeassur}}</p>
                </div>
                <div class="fo">
                    <p class="first">Sexe du conducteur :</p>
                    <p class="second">{{$profile->sexe}}</p>
                    <p class="first">Date de naissance du conducteur :</p>
                    <p class="second">{{$profile->dateNaiss}}</p>
                    <p class="first">Situation familiale du conducteur :</p>
                    <p class="second">{{$profile->situationMat}}</p>
                    <p class="first">Profession du conducteur :</p>
                    <p class="second">{{$profile->profession}}</p>
                </div>
                <div class="fo">
                    <p class="first">Date d'obtention du permis :</p>
                    <p class="second">{{$profile->datePermis}}</p>
                    <p class="first">Numero du permis:</p>
                    <p class="second">{{$profile->numPermis}}</p>
                    <p class="first">Nombre d'antécédents du conducteur:</p>
                    <p class="second">{{$profile->AntecedentAssur}}</p>
                    <p class="first">Nombre d'infraction du conducteur:</p>
                    <p class="second">{{$profile->InfractionsPermis}}</p>
                </div>
            
            <div class="text-center">
                <button class="btn btn-primary">Postuler votre offre</button>
            </div>
            
            <div id="div1" style="display: none;" class="uk-form">
                <form action="{{url('/agence/'.$assur->id.'/details')}}" method="post">
                {{csrf_field()}}
                <label for="">votre prix proposé :</label><br>
                <input type="number" name="prix" class="uk-input"><br>
                <div class="text-center">
                    
                    <input type="submit" class="uk-button uk-button-primary" value="Valider" >
                </div>
                </form>
            </div>
            
        </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").slideDown(1500);
    
  });
});
</script>
@endsection()