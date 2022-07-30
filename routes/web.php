<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

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

Route::middleware("guest")->group(function (){
    Route::get("/", [LoginController::class, "index"])->name("login");
    Route::post("/login", [LoginController::class, "login"])->name("login.trigger");
});

Route::middleware("auth")->group(function (){
    // chat
    Route::prefix("chat")->name("chat.")->group(function (){
        Route::get("/", [ChatController::class, "index"])->name("index");
    });
    // logout
    Route::get("/logout", [LoginController::class, "logout"])->name("logout");
});

