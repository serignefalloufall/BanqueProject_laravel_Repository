@extends('layouts.app')

@section('content')


@if(isset($ok))
    @if($ok == 1)
        <div style="margin-top: 410px; font-size: 35px; color: #02a1a1; margin-left: 130px;">Ajout reuissit</div>
    @else
        <div style="margin-top: 50px; font-size: 35px; color: red; margin-left: 130px;">Erreur d'insertion</div>
    @endif
@endif
<div class="contenue">
     
      <form action="{{ route('persistregion') }}" method="POST" class="formClient" id="formClient" onsubmit="return validationClient()">
    @csrf
        <fieldset class="fieldset">
          <legend class="legend">Gestion des regions:</legend>
          <div class="itemFieldset">
          

            <div>
              <label for="nom">Nom</label>
              <input type="text" name="nom" id="nom" placeholder="Nom....." />
            </div>
           

            <div class="btnSave">
            <input
              type="submit"
              name="btnAjouter"
              class="btn"
              value="Enregistrer"
            />
          </div>
          </div>
        </fieldset>

      </form>
    </div>
@endsection