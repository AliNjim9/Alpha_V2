<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <!-- Fonts -->
        @include('imports.imports')
                @yield('content')
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            body{
                background-color: #E0E7E9;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('components.navbar')
        <div class="container">
            @yield('content')
        </div>
        <div style="padding-top: 50px;">
            <h1 style="text-align: center;">User Pannel</h1>
        </div>
        <hr style="border: 1px dashed #8e5c6a;">
        <div style="text-align: center;">
            <a href="{{ route('/home') }}" >Dashboard</a>  >  <a href="{{route('/user/espace_user')}}" >User Profile</a>  >  <span style='text-decoration:underline'>Mes Ventes/Achats<span>
        </div>
        <div class="divided-div">
            <div class="left-div">
                <div class="links-div">
                    <div class="titled-div">
                        <h1>Outils</h1>
                    </div>
                    <div class="links-div-1">
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#showSpending-1">Mes Biens</a>
                        <div class="collapse" id="showSpending-1">
                            <div class="links-div-1-1">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#showSpending-1-1">• Appartements</a>
                                <div class="collapse" id="showSpending-1-1">
                                    <div>
                                        <a href="#">‣ Disponibles</a>
                                    </div>
                                    <div>
                                        <a href="#">‣ Bati</a>
                                    </div>
                                    <div>
                                        <a href="#">‣ Non bati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="links-div-1-1">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#showSpending-1-2">• Residences</a>
                                <div class="collapse" id="showSpending-1-2">
                                    <div>
                                        <a href="#">‣ Disponibles</a>
                                    </div>
                                    <div>
                                        <a href="#">‣ Bati</a>
                                    </div>
                                    <div>
                                        <a href="#">‣ Non bati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="links-div-1-1">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#showSpending-1-3">• Terrains</a>
                                <div class="collapse" id="showSpending-1-3">
                                    <div>
                                        <a href="#">‣ Disponibles</a>
                                    </div>
                                    <div>
                                        <a href="#">‣ Bati</a>
                                    </div>
                                    <div>
                                        <a href="#">‣ Non bati</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="links-div-2">
                        <a href="#" data-bs-toggle="collapse" data-bs-target="#showSpending-2">Contrats Ventes/Achats</a>
                        <div class="collapse show" id="showSpending-2">
                            <div class="links-div-1-2">
                                <div>
                                    <a href="{{ route('/contrat_vente/show_mes_contrats') }}">‣ Mes ventes et achats</a>
                                </div>
                                <div>
                                    <a href="{{ route('/contrat_vente/vendeur/show_ventes') }}">‣ Mes ventes</a>
                                </div>
                                <div>
                                    <a href="{{ route('/contrat_vente/acheteur/show_achats') }}">‣ Mes achats</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="" style="margin-top: 2%;"></div>
                <div class="" style="height: 30px; margin-top: 2%;"></div>
                <!-- Button trigger modal -->
                <div style="text-align:center;">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Lancez Infos
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Scrollable modal -->
                </div>
                <div class="" style="height: 30px; margin-top: 2%;"></div>
            </div>
            <div class="right-div">
                <h1>Mes Contrats Vente/Achats Details</h1>
                <div id="cde" style="display:inline;">
                    <select id="sort-select-categorie" style="float:right;margin:0 1% 0 1%">
                        <option value="all">All</option>
                        <option value="Terrain">Terrain</option>
                        <option value="Residence">Residence</option>
                        <option value="Appartement">Appartement</option>
                    </select>
                    <h7 style="float:right">Catégorie</h7>
                    <select id="sort-select" style="float:right;margin:0 1% 0 1%">
                        <option value="all">All</option>
                        <option value="Terrain">Terrain</option>
                        <option value="Residence">Residence</option>
                        <option value="Appartement">Appartement</option>
                    </select>
                    <h7 style="float:right">Surface</h7>
                </div>
                @if($contrats_ventes->count()>0)
                    <div id="contrats-container" class="row row-cols-2 row-cols-md-4 g-4" style="margin:1%;">
                        @foreach($contrats_ventes as $contrat_vente)
                        <ol>
                            <li>Acheteur :  {{ $contrat_vente->acheteur->name }}</li>
                            <li>Vendeur :  {{ $contrat_vente->vendeur->name }}</li>
                            <li>Type vente :  {{ $contrat_vente->type_vente }}</li>
                            <li>Date contrat :  {{ $contrat_vente->date_contrat }}</li>
                            <li>Vente détails :</li>
                            <ul>
                            @switch($contrat_vente->type_vente)
                                @case('Terrain')
                                    <li>Longeur: {{$contrat_vente->terrain_info->longeur}}</li>
                                    <li>Largeur: {{$contrat_vente->terrain_info->largeur}}</li>
                                    <li>Surface: {{$contrat_vente->terrain_info->surface}}</li>
                                    <li>Bati: {{$contrat_vente->terrain_info->bati==1?'Oui':'Non'}}</li>
                                    <li>A vendre : {{$contrat_vente->terrain_info->a_vendre==1?'Oui':'Non'}}</li>
                                    @break

                                @case('Residence')
                                    <li>Longeur: {{$contrat_vente->residence_info->longeur}}</li>
                                    <li>Largeur: {{$contrat_vente->residence_info->largeur}}</li>
                                    <li>Surface: {{$contrat_vente->residence_info->surface}}</li>
                                    <li>Bati: {{$contrat_vente->residence_info->bati==1?'Oui':'Non'}}</li>
                                    <li>A vendre : {{$contrat_vente->residence_info->a_vendre==1?'Oui':'Non'}}</li>
                                    @break

                                @case('Appartement')
                                    <li>Longeur: {{$contrat_vente->appartement_info->longeur}}</li>
                                    <li>Largeur: {{$contrat_vente->appartement_info->largeur}}</li>
                                    <li>Surface: {{$contrat_vente->appartement_info->surface}}</li>
                                    <li>Bati: {{$contrat_vente->appartement_info->bati==1?'Oui':'Non'}}</li>
                                    <li>A vendre : {{$contrat_vente->appartement_info->a_vendre==1?'Oui':'Non'}}</li>
                                    @break
                                @default
                                    <p>No option is selected</p>
                            @endswitch
                            </ul>  
                        </ol>
                        <hr style="border : 1px solid red"></hr>
                        @endforeach
                    </div>
                @else
                <br>
                    <h3>Vous ne disposez aucun contrat de vente.</h3>
                @endif  
            </div>
        </div>
        <script src="{{ asset('js/navbar.js') }}"></script>
        <script>
            $(document).ready(function() {
                // Initial data
                var contrats = @json($contrats_ventes);
                $('#contrats-container').empty();
                // Function to generate the ordered list for a user
                function generateOrderedList(data) {
                    var col=$('<div class="col"></div>');
                    var card=$('<div class="card h-100 border-3"></div>');
                    var img=$('<img src="..." class="card-img-top alt="...">');
                    var card_body=$('<div class="card-body"></div>');
                    var info=$('<a href="#" class="btn btn-primary"></a>').text('Ouvrir');
                    var title=$('<h5 class="card-title"></h5>').text(data.type_vente);
                    var text=$('<div class="card-text"></div>');
                    var card_footer=$('<div class="card-footer"></div>');
                    var text_f=$('<small class="text-muted"></small>').text("Date Contrat : "+data.date_contrat);
                    card_footer.append(text_f);
                    var orderedList = $('<ol></ol>');

                    var listItem1 = $('<li></li>').text('Acheteur: ' + data.acheteur.name);
                    var listItem2 = $('<li></li>').text('Vendeur: ' + data.vendeur.name);
                    var listItem3 = $('<li></li>').text('Date Contrat: ' + data.date_contrat);
                    var listItem4 = $('<li></li>').text('Vente détails: ');
                    var unorderedList = $('<ul></ul>');
                    var value = data.type_vente; // Example value
    
                    switch (value) {
                        case 'Terrain':
                            var ulistItem1 = $('<li></li>').text('Longeur: ' + data.terrain_info.longeur);
                            var ulistItem2 = $('<li></li>').text('Largeur: ' + data.terrain_info.longeur);
                            var ulistItem3 = $('<li></li>').text('Surface: ' + data.terrain_info.longeur);
                            var ulistItem4 = $('<li></li>').text('Bati: ' + (data.terrain_info.bati==1?'Oui':'Non'));
                            var ulistItem5 = $('<li></li>').text('A vendre: ' + (data.terrain_info.a_vendre==1?'Oui':'Non'));
                            break;
                        
                        case 'Residence':
                            var ulistItem1 = $('<li></li>').text('Longeur: ' + data.residence_info.longeur);
                            var ulistItem2 = $('<li></li>').text('Largeur: ' + data.residence_info.longeur);
                            var ulistItem3 = $('<li></li>').text('Surface: ' + data.residence_info.longeur);
                            var ulistItem4 = $('<li></li>').text('Bati: ' + (data.residence_info.bati==1?'Oui':'Non'));
                            var ulistItem5 = $('<li></li>').text('A vendre: ' + (data.residence_info.a_vendre==1?'Oui':'Non'));
                            break;
                        
                        case 'Appartement':
                            var ulistItem1 = $('<li></li>').text('Longeur: ' + data.appartement_info.longeur);
                            var ulistItem2 = $('<li></li>').text('Largeur: ' + data.appartement_info.longeur);
                            var ulistItem3 = $('<li></li>').text('Surface: ' + data.appartement_info.longeur);
                            var ulistItem4 = $('<li></li>').text('Bati: ' + (data.appartement_info.bati==1?'Oui':'Non'));
                            var ulistItem5 = $('<li></li>').text('A vendre: ' + (data.appartement_info.a_vendre==1?'Oui':'Non'));
                            break;
                        
                        default:
                            $('#result').text('No option is selected');
                            break;
                    }
                    unorderedList.append(ulistItem1, ulistItem2, ulistItem3, ulistItem4,ulistItem5);
                    orderedList.append(listItem1, listItem2, listItem4,unorderedList);
                    text.append(orderedList);
                    card_body.append(title,text,info);
                    card.append(img,card_body,card_footer);
                    col.append(card);
                    return col;
                }

                // Function to handle sorting based on the selected option
                function sortDataByType(type) {
                    var sortedContrats;

                    if (type === 'all') {
                        sortedContrats = contrats;
                    } else {
                        sortedContrats = contrats.filter(function(contrat) {
                            return contrat.type_vente === type;
                        });
                    }

                    // Clear the previous content and generate ordered lists for each user
                    $('#contrats-container').empty();

                    if(sortedContrats.length > 0) {
                        sortedContrats.forEach(function(contrat) {
                            var line=$('<hr style="border : 1px solid red"></hr>');
                            var ready_card = generateOrderedList(contrat);
                            
                            $('#contrats-container').append(ready_card);
                        });
                    }else
                        $('#contrats-container').text('Vous ne disposez aucun contrats de vente des '+ type +'s .');
                }

                // Select button change event
                $('#sort-select-categorie').change(function() {
                    var selectedType = $(this).val();
                    sortDataByType(selectedType);
                });
                if(contrats.length > 0) {
                // Display the initial data in the container
                contrats.forEach(function(contrat) {
                        var line=$('<hr style="border : 1px solid red"></hr>');
                        var ready_card = generateOrderedList(contrat);
                        $('#contrats-container').append(ready_card);
                    });
                }else
                $('#contrats-container').text('Vous ne disposez aucun contrats de vente des '+ selectedType +'s .');
            });
        </script>
    </body>
</html>