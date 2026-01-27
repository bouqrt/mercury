<?php
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::resource('groups', GroupController::class);
Route::resource('contacts', ContactController::class);
Route::get('/', function () {
    return view('welcome');
});
