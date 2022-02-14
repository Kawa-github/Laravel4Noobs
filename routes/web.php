<?php

use Illuminate\Support\Facades\Route;
// use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LandingController;
use Faker\Guesser\Name;
use Illuminate\Routing\Route as RoutingRoute;

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
    
Route::get('/', [LandingController::class, 'getLandingPage']);
Route::get('/about', [LandingController::class, 'getAboutPage']);
Route::get('/informations' , [LandingController::class, 'getInformations']);
     

// Route::get('usuario/me',[UserController::class,'getMeProfile'])->name('user-profile');
// Route::get('profile/info', [UserController::class, 'getInformations'])->name('user-info');
// Route::get('/user/{username}', [UserController::class, 'getProfile']);
// Route::get('/teste', [UserController::class, 'teste']);
// Route::get('/testing', [UserController::class, 'testing']);
