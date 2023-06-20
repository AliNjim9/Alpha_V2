<?php
use App\Http\Controllers\AppartementController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','user_restriction','unconfirmed'])->group(function () {

    Route::post('/appartement/creation_appartement', [AppartementController::class, 'creation_appartement'])
        ->name('/appartement/creation_appartement');

    Route::get('/appartement/show_by_id/{id}', [AppartementController::class, 'obtenir_appartement_avec_id'])
        ->name('/appartement/show_by_id');

    Route::get('/appartement/show_all', [AppartementController::class, 'afficher_tout'])
        ->name('/appartement/show_all');

    Route::get('/appartement', [AppartementController::class, 'afficher_mes_appartements'])
        ->name('/appartement/show');

    Route::get('/appartement/mes_hist_ventes', [AppartementController::class, 'afficher_mes_historiques_des_ventes'])
        ->name('/appartement/show_historiques_ventes');

    Route::get('/appartement/mes_hist_achats', [AppartementController::class, 'afficher_mes_historiques_des_achats'])
        ->name('/appartement/show_historiques_achats');
});
?>