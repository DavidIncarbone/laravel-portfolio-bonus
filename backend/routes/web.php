<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\typeController;
use App\Http\Controllers\Admin\technologyController;
use Illuminate\Support\Facades\Route;


Route::get("/", function () {
    return redirect()->route("admin.home");
});

Route::middleware(["auth", "verified"])
    ->name("admin.")
    ->prefix("admin")
    ->group(function () {
        Route::get('/', function () {
            return view('admin');
        })->name("home");
        Route::resource("profile", ProfileController::class);
        Route::resource("projects", ProjectController::class);
        Route::resource("types", typeController::class);
        Route::resource("technologies", technologyController::class);
    });




require __DIR__ . '/auth.php';
