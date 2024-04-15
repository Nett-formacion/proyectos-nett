<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AlumnoController;


Route::get("/",[MainController::class, "index"] )->name("main");
Route::view("about", "proyectos.about");
Route::view("contacta", "proyectos.contacta");
Route::view("proyectos", "proyectos.proyectos")->middleware("auth");
Route::get("alumnos", [AlumnoController::class, "index"]);
Route::get("alumnos/create", [AlumnoController::class, "create"]);
Route::post("alumnos/store", [AlumnoController::class, "store"]);
Route::delete("alumnos/{id}", [AlumnoController::class, "delete"]);
Route::get("alumnos/edit/{id}", [AlumnoController::class, "edit"]);
Route::patch("alumnos/{id}", [AlumnoController::class, "update"]);

Route::resource("Proyectos", \App\Http\Controllers\ProyectosController::class);


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
