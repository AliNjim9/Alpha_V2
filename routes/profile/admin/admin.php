<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;




Route::middleware(['auth','unconfirmed','admin_restriction'])->group(function () {
    Route::get('/admin_profile', [ProfileController::class, 'adminProfile'])->
        name('/admin/espace_admin');
    
        Route::delete('/admin/deleteUser/{user_id}', [AdminController::class, 'deleteUser'])
        ->name('/admin/deleteUser');
        Route::put('/admin/updateUser/{user_id}', [AdminController::class, 'updateUser'])
        ->name('/admin/updateUser');


    Route::get('/admin_profile/all_users', [AdminController::class, 'getAllUsers'])->
        name('/admin/all_users');

    
});