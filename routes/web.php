<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\PupilController;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\AdministracijaController;
use App\Policies\AdministrationPolicy;
use App\Policies\SchoolPolicy;

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

Route::middleware(['auth',sprintf('can:%s.%s',AdministrationPolicy::POLICY_NAMESPACE, AdministrationPolicy::ACTION_DASHBOARD)])
    ->prefix('administration')->group(function(){

   Route::get('/', [AdministracijaController::class,'index'])->name('administracija');

   Route::prefix("school")->group(function(){
       // Škola rute
       Route::get('/',[SchoolController::class,'index'])->name('skole')->middleware(sprintf('can:%s.%s',SchoolPolicy::POLICY_NAMESPACE, SchoolPolicy::ACTION_SKOLE));
       Route::get('/create/', [SchoolController::class,'create'])->name('skola_create')->middleware(sprintf('can:%s.%s',SchoolPolicy::POLICY_NAMESPACE, SchoolPolicy::ACTION_CREATE));
       Route::get('/update/{'. \App\Models\Contracts\SchoolInterface::ENTITY .'}',[SchoolController::class,'update'])->name('school')->middleware(sprintf('can:%s.%s,%s',SchoolPolicy::POLICY_NAMESPACE, SchoolPolicy::ACTION_SKOLA, \App\Models\Contracts\SchoolInterface::ENTITY));
       Route::get('/deactivate/{'. \App\Models\Contracts\SchoolInterface::ENTITY .'}',[SchoolController::class,'deactivate'])->name('school_deactivate')->middleware(sprintf('can:%s.%s,%s',SchoolPolicy::POLICY_NAMESPACE, SchoolPolicy::ACTION_DEACTIVATE, \App\Models\Contracts\SchoolInterface::ENTITY));
   });

   Route::prefix('administrator')->group(function(){
       Route::get('/',[AdministratorController::class,'index'])->name('administrator')->middleware(sprintf('can:%s.%s',UserPolicy::POLICY_NAMESPACE, UserPolicy::ACTION_ADMIN));
       Route::get('/create/', [AdministratorController::class,'create'])->name('administrator_create')->middleware(sprintf('can:%s.%s',UserPolicy::POLICY_NAMESPACE, UserPolicy::ACTION_ADMIN));
       Route::get('/update/{'. \App\Models\Contracts\UserInterface::ENTITY .'}',[AdministratorController::class,'update'])->name('admin_update')->middleware(sprintf('can:%s.%s,%s',UserPolicy::POLICY_NAMESPACE, UserPolicy::ACTION_ADMIN_UPDATE, \App\Models\Contracts\UserInterface::ENTITY));
       Route::post('/store',[AdministratorController::class,'store'])->name("create_admin")->middleware(sprintf('can:%s.%s',UserPolicy::POLICY_NAMESPACE, UserPolicy::ACTION_ADMIN));


   });

    Route::prefix('pupil')->group(function(){
        Route::get('/',[PupilController::class,'index'])->name('pupil')->middleware(sprintf('can:%s.%s',UserPolicy::POLICY_NAMESPACE, UserPolicy::ACTION_PUPIL));

    });
});
