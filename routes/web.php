<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WorkController;



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
})->name('welcome');

Route::get('/artistes', function () {
    return view('artists');
})->name('artists');

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
Route::get('artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('artists/create', [ArtistController::class, 'create'])->name('artists.create');
Route::post('artists', [ArtistController::class, 'store'])->name('artists.store');
Route::get('artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');
Route::get('artists/{artist}/edit', [ArtistController::class, 'edit'])->name('artists.edit');
Route::put('artists/{artist}', [ArtistController::class, 'update'])->name('artists.update');
Route::delete('artists/{artist}', [ArtistController::class, 'destroy'])->name('artist.destroy');

// Route::resource('collections', CollectionController::class);
Route::get('collections', [CollectionController::class, 'index'])->name('collections.index');
Route::get('collections/create', [CollectionController::class, 'create'])->name('collections.create');
Route::post('collections', [CollectionController::class, 'store'])->name('collections.store');
Route::get('collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');
Route::get('collections/{collection}/edit', [CollectionController::class, 'edit'])->name('collections.edit');
Route::put('collections/{collection}', [CollectionController::class, 'update'])->name('collections.update');
Route::delete('collections/{collection}', [CollectionController::class, 'destroy'])->name('collections.destroy');

// Route::resource('categories', CategoryController::class);
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/{category}/edit', [categoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryControler::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [categoryController::class, 'destroy'])->name('categories.destroy');


// Route::resource('works', WorkController::class);
Route::get('works', [WorkController::class, 'index'])->name('works.index');
Route::get('works/create', [WorkController::class, 'create'])->name('works.create');
Route::post('works', [WorkController::class, 'store'])->name('works.store');
Route::get('works/{work}', [WorkController::class, 'show'])->name('works.show');
Route::get('works/{work}/edit', [WorkController::class, 'edit'])->name('works.edit');
Route::put('/works/{work}', [WorkController::class, 'update'])->name('works.update');
Route::delete('works/{work}', [WorkController::class, 'destroy'])->name('works.update');







// Route::resource('Admins', AdminController::class);

Route::get('/accueil', [FrontController::class, 'accueil'])->name('accueil');

