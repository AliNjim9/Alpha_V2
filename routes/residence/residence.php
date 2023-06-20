<?php
use App\Http\Controllers\ResidenceController;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth','user_restriction','unconfirmed'])->group(function () {
    Route::post('/residence/creation_residence', [ResidenceController::class, 'creation_residence'])
        ->name('/residence/creation_residence');
    
    Route::get('/residence/show_all', [ResidenceController::class, 'afficher_tout'])
        ->name('/residence/show_all');
    
    Route::get('/residence/show_by_id/{id}', [ResidenceController::class, 'obtenir_residence_avec_id'])
        ->name('/residence/show_by_id');
    
    Route::get('/residence/a_vendre', [ResidenceController::class, 'afficher_a_vendre'])
        ->name('/residence/a_vendre');
    
    Route::get('/residence', [ResidenceController::class, 'afficher_mes_residences'])
        ->name('/residence/show');
    
    Route::get('/residence/mes_hist_ventes', [ResidenceController::class, 'afficher_mes_historiques_des_ventes'])
        ->name('/residence/show_historiques_ventes');
    
    Route::get('/residence/mes_hist_achats', [ResidenceController::class, 'afficher_mes_historiques_des_achats'])
        ->name('/residence/show_historiques_achats');

});
?>