<?php
use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;


Route::resource('groups', GroupController::class);
Route::get('/', function () {
    return view('welcome');
});
