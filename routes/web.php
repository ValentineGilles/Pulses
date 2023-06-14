<?php
use App\Http\Controllers\ArtistController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


// Tous les chemins où il est nécessaire d'être un artiste
Route::middleware(['auth', 'artist'])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});


// Tous les chemins où il est nécessaire d'être authentifié

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/myartists', function () {return view('myartists');})->name('myartists');
    Route::get('/myproducts', function () {return view('myproducts');})->name('myproducts');
    Route::get('/messaging', function () {return view('messaging');})->name('messaging');
    Route::get('/search', [ArtistController::class, 'search'])->name('search');
    Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artist.show');
});


require __DIR__.'/auth.php';