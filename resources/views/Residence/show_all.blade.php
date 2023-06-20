<h1>Residences Details</h1>
@if($residences->count()>0 )
    @foreach($residences as $residence)
        <ol>
            <li>Proprietaire id :  {{ $residence->proprietaire }}</li>
            <li>Code : {{ $residence->id }}</li>
            <li>Nom : {{ $residence->nom }}</li>
            <li>Longeur : {{ $residence->longeur }}</li>
            <li>Largeur :{{ $residence->largeur }}</li>
            <li>Surface :{{ $residence->surface }}</li>
            @if($residences->bati==1 )
                <li>Bâti : Oui</li>
                <li>Nombre des blocs :{{ $residence->nombre_blocs }}</li>
                <li>Nombre des appartements :{{ $residence->nombre_appartements }}</li>
            @else
                <li>Bâti : Non</li>
            <li>A vendre :{{ $residence->a_vendre==1?'Oui':'Non' }}</li>
            <li>A louer :{{ $residence->a_louer==1?'Oui':'Non' }}</li>
            @endif
        </ol>
    @endforeach
@else
<p>Residences n'existent pas</p>
@endif