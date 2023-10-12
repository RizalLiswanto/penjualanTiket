<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RoleController;
use App\Models\Role;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::middleware(['guest'])->group(function(){
    Route::get('/',[LoginController::class,'index'])->name('/');
    Route::post('login',[LoginController::class,'login'])->name('login');
    Route::get('register',[LoginController::class,'register'])->name('register');
    Route::post('registerAuth',[LoginController::class,'registerAuth'])->name('registerAuth');

});


Route::middleware(['auth'])->group(function(){
 
    
   
        
        Route::middleware(['auth','role:admin'])->group(function(){
 
            Route::controller(RoleController::class)->group(function(){
                route::get('role','index')->name('index');
                route::get('roleCreate','create')->name('createRole');
                route::post('createAction','createAction')->name('createAction');
                route::get('edit/{id}','edit')->name('edit');
                route::post('editAction/{id}','editAction')->name('editAction');
                route::post('delete/{id}','delete')->name('delete');
      
            });
        
        });
        Route::middleware(['auth','role:user'])->group(function(){
            Route::get('/profil',[ProfilController::class,'index'])->name('index');
            Route::get('/film',[FilmController::class,'index'])->name('film'); 
        });
        Route::get('logout',[LoginController::class,'logout'])->name('logout');
        

});

