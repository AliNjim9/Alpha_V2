<h1>Terrains à vendre</h1>
@if($terrains->count()>0)
    @foreach($terrains as $terrain)
        <ol>
            <li>Proprietaire :  {{ $terrain->relatedUser->name }}</li>
            <li>Code : {{ $terrain->id }}</li>
            <li>Longeur : {{ $terrain->longeur }}</li>
            <li>Largeur :{{ $terrain->largeur }}</li>
            <li>Surface :{{ $terrain->surface }}</li>
            <li>Bâti :{{ $terrain->bati==1?'Oui':'Non' }}</li>
        </ol>
    @endforeach
@else
<p>Terrains à vendre n'existent pas</p>
@endif