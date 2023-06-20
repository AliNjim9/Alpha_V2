<h1>Details Appartement</h1>
@if($appartement && $user²)
    <ul>
        <li>{{ $appartement->id }}</li>
        <li>{{ $appartement->nom_bloc }}</li>
        <li>{{ $user->name }}</li>
    </ul>
@else
<p>Cet appartement n'existe pas</p>
@endif