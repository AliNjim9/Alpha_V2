<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
})->name('/home');
Route::get('/restrictions/restricted', function () {
    return view('/restrictions/restricted');
})->name('restricted');

Route::get('/restrictions/user_restrictions', function () {
    return view('/restrictions/user_restrictions');
})->name('user_restrictions');

Route::get('/restrictions/admin_restrictions', function () {
    return view('/restrictions/admin_restrictions');
})->name('admin_restrictions');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');







require __DIR__.'/auth.php';
require __DIR__.'/profile/admin/admin.php';
require __DIR__.'/profile/user/user.php';
require __DIR__.'/terrain/terrain.php';
require __DIR__.'/residence/residence.php';
require __DIR__.'/appartement/appartement.php';
require __DIR__.'/contrat_vente/contrat_vente.php';