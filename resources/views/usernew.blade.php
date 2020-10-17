@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/ajouter.css') }}">
@endsection()
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 form">
        <form action="{{url('/home/assur')}}" method="post">
            
            <fieldset class="uk-fieldset">
                
                    <h3>les information d'utilisateur</h3>
                
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="uk-margin uk-form">
                    <select class="uk-select" name="modeachat">
                        <option value="Comptant">situation maritale</option>
                        <option value="Credit">Célibataire</option>
                        <option value="LLD">Marié</option>
                        <option value="LOA">LOA</option>
                    </select>
                </div>
                <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">nombre d'enfants</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="text" placeholder="">
                        </div>
                    </div>
                <div id="neworno">
                    <div class="uk-form">
                        <label for="">Date de dérnier réservation :</label><br>
                        <input type="date" name="dateper" class="date">
                    </div>
                </div>
                
                <input type="submit" class="uk-button uk-button-primary" value="Modifier" >
            </fieldset>
        </form>
        </div>
    </div>
</div>
<script>
    function hide() 
    {
        document.getElementById('neworno').style.display="none";
    }
    function show() 
    {
        document.getElementById('neworno').style.display="block";
    }
</script>
@endsection()