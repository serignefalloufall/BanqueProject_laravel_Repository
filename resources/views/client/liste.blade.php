@extends('layouts.app')

@section('content')

    <div class="contenue">
        <fieldset class="fieldset">
          <legend class="legend">Liste des clients</legend>
          <div class="itemFieldset">
			<div>
						<table class="table">
							<tr>
								<th>Identifiant</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Adresse</th>
								<th>Telephone</th>
								<th>Email</th>
								<th>Profession</th>
								<th>Action</th>
								<th>Action</th>
							</tr>
							@if(isset($clients))
								@if($clients != null)
									@foreach ($clients as $client)
								<tr>
									<td>{{$client->id}}</td>
									<td>{{$client->nom}}</td>
									<td>{{$client->prenom}}</td>
									<td>{{$client->adresse}}</td>
									<td>{{$client->tel}}</td>
									<td>{{$client->email}}</td>
									<td>{{$client->profession}}</td>
									<td><a class="link" href="{{ route('editclient', ['id'=>$client->id]) }}" onclick = "return confirm('Voulez-vous reelement modifier ?');">Editer</a></td>
									<td><a class="link" href="{{ route('deleteclient', ['id'=>$client->id]) }}" onclick = "return confirm('Voulez-vous reelement suprimer ?');">Suprimer</a></td>
								</tr>
                                @endforeach
								@endif
							@endif
						</table>
					
			</div>
		  </div>
		  <button class="btna">
			<a class="link" href="{{ route('addclient') }}">Nouveau client</a>
		</button>	
        </fieldset>
    </div>
@endsection