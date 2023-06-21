<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;




Route::middleware(['auth','unconfirmed','admin_restriction'])->group(function () {
    Route::get('/admin_profile', [ProfileController::class, 'adminProfile'])->
        name('/admin/espace_admin');
    
    Route::delete('/admin_profile/deleteUser/{user_id}', [AdminController::class, 'deleteUser'])
        ->name('/admin/deleteUser');
    
    Route::put('/admin_profile/updateUser/{user_id}', [AdminController::class, 'updateUser'])
        ->name('/admin/updateUser');

    Route::get('/admin_profile/all_transactions', [AdminController::class, 'getAllTransactions'])
        ->name('/admin/all_transactions');
    

    Route::get('/admin_profile/all_users', [AdminController::class, 'getAllUsers'])->
        name('/admin/all_users');

    
});