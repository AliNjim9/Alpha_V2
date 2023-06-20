<h1>Details Historique des ventes des résidences</h1>
@if($ventes->count()>0 )
    <ul>
        @foreach($ventes as $vente)
            <li>{{ $vente->id }}</li>
            <li>{{ $vente->type_vente }}</li>
        @endforeach
    </ul>
@else
<p>Pas de ventes des terrains</p>
@endif