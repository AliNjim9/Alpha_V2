<h1>Mes Appartements</h1>
@if($appartements->count()>0 )
    @foreach($appartements as $appartement)
        <ol>
            <li>Appartement id :  {{ $appartement->id }}</li>
            <li>Bloc :  {{ $appartement->nom_bloc }}</li>
            <li>Longeur : {{ $appartement->longeur }}</li>
            <li>Largeur :{{ $appartement->largeur }}</li>
            <li>Surface :{{ $appartement->surface }}</li>
            @if($appartement->bati==1 )
                <li>Bâti : Oui</li>
                <li>S + {{ $appartement->nombre_pieces }}</li>
            @else
                <li>Bâti : Non</li></ol>            <li>A vendre :{{ $appartement->a_vendre==1?'Oui':'Non' }}</li>
            <li>A louer :{{ $appartement->a_louer==1?'Oui':'Non' }}</li>
        </ol>
    @endforeach
@else
<p>Appartements n'existent pas</p>
@endif