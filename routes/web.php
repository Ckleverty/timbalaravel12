<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');


#rota para o index
Route:: get('index-user',[UserController::class, 'index'])->name('users.index');

Route::get('/create-user', [UserController::class, 'create'])->name('users.create');


Route::post('/store-user', [UserController::class, 'store'])->name('users.store');
