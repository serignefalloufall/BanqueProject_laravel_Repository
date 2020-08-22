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
								<th>Action</th>
								<th>Action</th>
							</tr>
							@if(isset($regions))
								@if($regions != null)
									@foreach ($regions as $region)
									<tr>
										<td>{{ $region->id }}</td>
										<td>{{ $region->nom }}</td>
										<td><a class="link" href="{{ route('editregion', ['id'=>$region->id]) }}" onclick = "return confirm('Voulez-vous reelement modifier ?');">Editer</a></td>
										<td><a class="link" href="{{ route('deleteregion', ['id'=>$region->id]) }}" onclick = "return confirm('Voulez-vous reelement suprimer ?');">Suprimer</a></td>
									</tr>
									@endforeach
								@endif
							@endif
						</table>

			</div>
		  </div>
		 {{-- $regions->links() --}}

		  <button class="btna">
			<a class="link" href="{{ route('addregion') }}">New region</a>
		</button>	
        </fieldset>
    </div>
@endsection