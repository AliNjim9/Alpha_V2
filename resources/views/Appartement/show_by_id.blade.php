<h1>Details Appartement</h1>
@if($appartement)
    <ul>
        <li>Proprietaire : {{ $appartement->relatedUser->name }}</li>
        <li>Nom bloc : {{ $appartement->nom_bloc }}</li>
        <li>Longeur : {{ $appartement->longeur }}</li>
        <li>Largeur : {{ $appartement->largeur }}</li>
        <li>Surface : {{ $appartement->surface }}</li>
        @if($appartement->bati==1 )
            <li>Bâti : Oui</li>
            <li>S + {{ $appartement->nombre_pieces }}</li>
        @else
            <li>Bâti : Non</li>
        @endif
        <li>A vendre :{{ $appartement->a_vendre==1?'Oui':'Non' }}</li>
    </ul>
@else
<p>Cet appartement n'existe pas</p>
@endif