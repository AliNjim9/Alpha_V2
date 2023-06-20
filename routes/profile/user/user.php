<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;




Route::middleware(['auth','unconfirmed','user_restriction'])->group(function () {
    Route::get('/user_profile', [ProfileController::class, 'userProfile'])
        ->name('/user/espace_user');
});