<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

route::name('students.')->prefix('students')->group(function () {
    route::get('/', [UserController::class, 'index'])->name('index');
    route::get('/{id}', [UserController::class, 'show'])->name('show');
});
