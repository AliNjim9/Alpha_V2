<h1>Residences à louer</h1>
@if($residences->count()>0 )
    @foreach($residences as $residence)
        <ol>
            <li>Code : {{ $residence->id }}</li>
            <li>Proprietaire id : {{ $residence->proprietaire }}</li>
            <li>Nom : {{ $residence->nom }}</li>
            <li>Longeur : {{ $residence->longeur }}</li>
            <li>Largeur :{{ $residence->largeur }}</li>
            <li>Surface :{{ $residence->surface }}</li>
            @if($residences->bati==1 )
                <li>Bâti : Oui</li>
                <li>Nombre des blocs :{{ $residence->nombre_blocs }}</li>
                <li>Nombre des appartements :{{ $residence->nombre_appartements }}</li>
            @else
                <li>Bâti : Non</li></ol>
    @endforeach
@else
<p>Residences à louer n'existent pas</p>
@endif