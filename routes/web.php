<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\Controller;


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
    return view('atelierdusud.accueil');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/atelierdusud.accueil', function () {
        return view('atelierdusud.accueil');
    })->name('atelierdusud.accueil');
});

// Route::resource('artists', ArtistController::class);
Route::get('artists', [ArtistController::class, 'index'])->name('atelierdusud.artists.index');
Route::get('artists/create', [ArtistController::class, 'create'])->name('atelierdusud.artists.create');
Route::post('artists', [ArtistController::class, 'store'])->name('atelierdusud.artists.store');
Route::get('artists/{artist}', [ArtistController::class, 'show'])->name('atelierdusud.artists.show');
Route::get('artists/{artist}/edit', [ArtistController::class, 'edit'])->name('atelierdusud.artists.edit');
Route::put('artists/{artist}', [ArtistController::class, 'update'])->name('atelierdusud.artists.update');
Route::delete('artists/{artist}', [ArtistController::class, 'destroy'])->name('atelierdusud.artist.destroy');

// Route::resource('collections', CollectionController::class);
Route::get('collections', [CollectionController::class, 'index'])->name('atelierdusud.collections.index');
Route::get('collections/create', [CollectionController::class, 'create'])->name('atelierdusud.collections.create');
Route::post('collections', [CollectionController::class, 'store'])->name('atelierdusud.collections.store');
Route::get('collections/{collection}', [CollectionController::class, 'show'])->name('atelierdusud.collections.show');
Route::get('collections/{collection}/edit', [CollectionController::class, 'edit'])->name('atelierdusud.collections.edit');
Route::put('collections/{collection}', [CollectionController::class, 'update'])->name('atelierdusud.collections.update');
Route::delete('collections/{collection}', [CollectionController::class, 'destroy'])->name('atelierdusud.collections.destroy');

// Route::resource('categories', CategoryController::class);
Route::get('categories', [CategoryController::class, 'index'])->name('atelierdusud.categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('atelierdusud.categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('atelierdusud.categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('atelierdusud.categories.show');
Route::get('categories/{category}/edit', [categoryController::class, 'edit'])->name('atelierdusud.categories.edit');
Route::put('categories/{category}', [CategoryControler::class, 'update'])->name('atelierdusud.categories.update');
Route::delete('categories/{category}', [categoryController::class, 'destroy'])->name('atelierdusud.categories.destroy');


// Route::resource('works', WorkController::class);
Route::get('works', [WorkController::class, 'index'])->name('atelierdusud.works.index');
Route::get('works/create', [WorkController::class, 'create'])->name('atelierdusud.works.create');
Route::post('works', [WorkController::class, 'store'])->name('atelierdusud.works.store');
Route::get('works/{work}', [WorkController::class, 'show'])->name('atelierdusud.works.show');
Route::get('works/{work}/edit', [WorkController::class, 'edit'])->name('atelierdusud.works.edit');
Route::put('works/{work}', [WorkController::class, 'update'])->name('atelierdusud.works.update');
Route::delete('works/{work}', [WorkController::class, 'destroy'])->name('atelierdusud.works.update');







// Route::resource('Admins', AdminController::class);

Route::get('home', [FrontController::class, 'home'])->name('home');

