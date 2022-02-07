<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('usuario/me',[UsersController::class,'GetmeProfile'])->name('user-profile');
Route::get('user/info', [UsersController::class, 'informations'])->name('user-info');
Route::get('/user/{username}', [UsersController::class, 'getProfile']);
Route::get('/teste', [UsersController::class, 'teste']);
