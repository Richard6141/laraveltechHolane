<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HolaneController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('login',function(){
    return view('login');
});

// route::post('holane', [UserController::class, 'holane'])->name('holane');

route::get('/users/create', [UserController::class, 'create']);
route::post('/hola', [HolaneController::class, 'holane'])->name('hola');
route::get('/users', [HolaneController::class, 'index']);
route::get('usersupF/{id}', [HolaneController::class, 'upform']);
route::post('usersup', [HolaneController::class, 'update'])->name('usersup');