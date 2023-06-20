<h1>Details Terrain</h1>
@if($terrain && $user)
    <ul>
        <li>Code : {{ $terrain->id }}</li>
        <li>Proprietaire : {{ $user->name }}</li>
    </ul>
@else
<p>Ce terrain n'existe pas</p>
@endif