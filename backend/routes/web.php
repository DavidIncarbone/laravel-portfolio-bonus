<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TypeController;
use App\Http\Controllers\Admin\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});

Route::middleware(["auth", "verified"])
    ->name("admin.")
    ->prefix("admin")
    ->group(function () {
        Route::resource("profile", ProfileController::class);
        Route::resource("projects", ProjectController::class);
        Route::resource("types", TypeController::class);
        Route::resource("technologies", TechnologyController::class);
    });




require __DIR__ . '/auth.php';
