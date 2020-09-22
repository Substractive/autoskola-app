<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministracijaController;
use App\Policies\AdministrationPolicy;

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
    return view('home');
})->name('landing');

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('login',[LoginController::class,'authenticate'])->name('login');
Route::get('ispiti')->name('ispiti');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

Route::middleware(['auth'])
    ->middleware(
        sprintf('can:%s.%s',AdministrationPolicy::POLICY_NAMESPACE, AdministrationPolicy::ACTION_DASHBOARD)
    )
    ->prefix('administracija')->group(function(){

   Route::get('/', [AdministracijaController::class,'index'])->name('administracija');
});
