<h1>Mes Terrains</h1>
@if($terrains->count()>0 )
    @foreach($terrains as $terrain)
        <ol>
            <li>Code : {{ $terrain->id }}</li>
            <li>Longeur : {{ $terrain->longeur }}</li>
            <li>Largeur :{{ $terrain->largeur }}</li>
            <li>Surface :{{ $terrain->surface }}</li>
            <li>Bâti :{{ $terrain->bati==1?'Oui':'Non' }}</li>
            <li>A vendre :{{ $terrain->a_vendre==1?'Oui':'Non' }}</li>
            <li>A louer :{{ $terrain->a_louer==1?'Oui':'Non' }}</li>
        </ol>
    @endforeach
@else
<p>Terrain n'existent pas</p>
@endif