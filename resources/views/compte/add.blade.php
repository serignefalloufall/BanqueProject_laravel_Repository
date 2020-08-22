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
      <div class="error" id="message_error"></div>
      <form
        action="{{ route('persistcompte') }}"
        method="POST"
        class="formClient"
        id="formClient"
      >
        <fieldset class="fieldset">
          <legend class="legend">Rechercher client</legend>
          <div class="itemFieldset">
            <div>
              <label for="">Client:</label>
              <select
                name="client_id"
                id="client_id"
                onchange="verifTypeClient()"
              >
                <option value="">Choisir client</option>
                {if isset($listeClient)} {if $listeClient != null} {foreach
                from=$listeClient item=l_client}
                <option value="{$l_client->getId()}">
                  {$l_client->getPrenom()} {$l_client->getNom()}
                </option>
                {/foreach} {else} Liste vide {/if} {/if}
              </select>
            </div>
            <div>
              <label for="">CNI</label>
              <input type="text" name="cni" id="cni" value="" />
            </div>
          </div>
        </fieldset>

        <fieldset class="fieldset" id="emp">
          <legend class="legend">Gestion compte:</legend>
          <div class="itemFieldset">
            <div>
              <label for="">Type de compte:</label>
              <select
                name="type_compte_id"
                id="selectCompte"
                onchange="myFunction()"
              >
                <option value="">Choisir un type de compte</option>

                {if isset($listeTypeCompte)} {if $listeTypeCompte != null}
                {foreach from=$listeTypeCompte item=l_typeCompte}
                <option value="{$l_typeCompte->getId()}">
                  {$l_typeCompte->getLibelle()}
                </option>
                {/foreach} {else} Liste vide {/if} {/if}
              </select>
            </div>
            <div>
              <label for="">Date d'ouverture</label>
              <input
                type="text"
                name="date_ouverture"
                id="date"
                value="{$today}"
                readonly
              />
            </div>
            <div>
              <label for="">Numero compte</label>
              <input
                type="text"
                name="num_compte"
                id="numCompte"
                value="{$numcompte}"
                readonly
              />
            </div>
            <div>
              <label for="">Numero agence</label>
              <select name="agence_id" id="agence_id">
                <option value="">Votre agence</option>

                {if isset($listeAgence)} {if $listeAgence != null} {foreach
                from=$listeAgence item=l_compte}
                <option value="{$l_compte->getId()}">
                  {$l_compte->getNom()}
                </option>
                {/foreach} {else} Liste vide {/if} {/if}
              </select>
            </div>
            <div>
              <label for="">Cle rip</label>
              <input
                type="text"
                name="cle_rip"
                id="cleRip"
                value="{$cleRip}"
                readonly
              />
            </div>

            <div class="dfermuture" id="dfermuture">
              <label for="">Date fermuture</label>
              <input
                type="date"
                name="date_fermuture"
                id="date_fermuture"
                value=""
              />
            </div>

            <div class="frais" id="frais">
              <label for="">Frais ouverture</label>
              <input
                type="text"
                name="frais_ouverture"
                id="fouverture"
                placeholder="Frais d'ouverture....."
              />
            </div>

            <div class="agio" id="agio">
              <label for="">Montant agio</label>
              <input
                type="text"
                name="agio"
                id="agio"
                placeholder="L'agio....."
              />
            </div>
          </div>

          <div class="btnSave">
            <input
              type="submit"
              name="btnAjouter"
              class="btn"
              value="Enregistrer"
            />
          </div>
        </fieldset>
      </form>
    </div>
@endsection