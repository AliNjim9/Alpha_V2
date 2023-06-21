<h1>Appartement à vendre</h1>
@if($appartements->count()>0 )
    @foreach($appartements as $appartement)
    <ol>
        <li>Proprietaire id :  {{ $appartement->relatedUser->name }}</li>
        <li>Appartement id :  {{ $appartement->id }}</li>
        <li>Bloc :  {{ $appartement->nom_bloc }}</li>
        <li>Longeur : {{ $appartement->longeur }}</li>
        <li>Largeur :{{ $appartement->largeur }}</li>
        <li>Surface :{{ $appartement->surface }}</li>
        @if($appartement->bati==1 )
            <li>Bâti : Oui</li>
            <li>S + {{ $appartement->nombre_pieces }}</li>
        @else
            <li>Bâti : Non</li></ol>
        @endif
    </ol>
    @endforeach
@else
<p>Appartements à vendre n'existent pas</p>
@endif