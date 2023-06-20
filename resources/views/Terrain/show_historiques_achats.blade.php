<h1>Details Historique des achats des terrain</h1>
@if($achats->count()>0)
    <ul>
        @foreach($achats as $achat)
            <li>{{ $achat->id }}</li>
            <li>{{ $achat->type_vente }}</li>
        @endforeach
    </ul>
@else
<p>Pas d'achats des terrains</p>
@endif