<h1>Details Residence</h1>
@if($residence && $user)
    <ul>
        <li>{{ $residence->id }}</li>
        <li>{{ $residence->nom_bloc }}</li>
        <li>{{ $user->name }}</li>
    </ul>
@else
<p>Cette residence n'existe pas</p>
@endif