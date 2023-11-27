<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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


// Liste les animaux
Route::get('/animals', [AnimalController::class, 'index']);

// Ajoute un animale :)
Route::get('/add-animal', [AnimalController::class, 'create'])->name('add-animal');
Route::post('/add-animal', [AnimalController::class, 'store'])->name('animals.store');

// Manage les animaux
Route::get('/manage-animals', [AnimalController::class, 'manageAnimals'])->name('manage-animals');

// Edite un animal
Route::get('/animals/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
// Modifie un animal
Route::put('/animals/{animal}', [AnimalController::class, 'update'])->name('animals.update');
// Supprime un animal
Route::delete('/animals/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');