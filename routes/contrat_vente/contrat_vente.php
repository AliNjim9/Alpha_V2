<?php
use App\Http\Controllers\Contrat_venteController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','user_restriction','unconfirmed'])->group(function () {
    Route::post('/contrat_vente/creation_contrat_vente', [Contrat_venteController::class, 'creation_contrat_vente'])
        ->name('/contrat_vente/creation_contrat_vente');
    
    Route::get('/profile/contrat_vente/show_by_id/{id}', [Contrat_venteController::class, 'obtenir_contrat_vente_avec_id'])
        ->name('/contrat_vente/show_by_id');
    
    Route::get('/profile/contrat_vente/show_all', [Contrat_venteController::class, 'afficher_tout'])
        ->name('/contrat_vente/show_all');
    
    Route::get('/profile/contrat_vente/show_mes_contrats', [Contrat_venteController::class, 'afficher_mes_contrats'])
        ->name('/contrat_vente/show_mes_contrats');
    
    Route::get('/profile/contrat_vente/vendeur/show_ventes', [Contrat_venteController::class, 'afficher_mes_contrats_ventes'])
        ->name('/contrat_vente/vendeur/show_ventes');
    
    Route::get('/profile/contrat_vente/acheteur/show_achats', [Contrat_venteController::class, 'afficher_mes_contrats_achats'])
        ->name('/contrat_vente/acheteur/show_achats');
});

?>