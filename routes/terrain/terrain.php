<?php
use App\Http\Controllers\TerrainController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth','user_restriction','unconfirmed'])->group(function () {
    Route::post('/terrain/creation_terrain', [TerrainController::class, 'creation_terrain'])
        ->name('/terrain/creation_terrain');
    
    Route::get('/terrain/show_all', [TerrainController::class, 'afficher_tout'])
        ->name('/terrain/show_all');
    
    Route::get('/terrain/show_by_id/{id}', [TerrainController::class, 'obtenir_terrain_avec_id'])
        ->name('/terrain/show_by_id');
    
    Route::get('/terrain', [TerrainController::class, 'afficher_mes_terrains'])
        ->name('/terrain/show');
    
    Route::get('/terrain/a_vendre', [TerrainController::class, 'afficher_a_vendre'])
        ->name('/terrain/a_vendre');
    
    Route::get('/terrain/mes_hist_ventes', [TerrainController::class, 'afficher_mes_historiques_des_ventes'])
        ->name('/terrain/show_historiques_ventes');
    
    Route::get('/terrain/mes_hist_achats', [TerrainController::class, 'afficher_mes_historiques_des_achats'])
        ->name('/terrain/show_historiques_achats');
    });

?>