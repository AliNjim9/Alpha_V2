<h1>Details Historique des achats des appartements</h1>
@if($ventes->count()>0 )
    <ul>
        @foreach($ventes as $vente)
            <li>{{ $vente->id }}</li>
            <li>{{ $vente->type_vente }}</li>
        @endforeach
    </ul>
@else
<p>Pas de'achats des appartements</p>
@endif