<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\EventController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('artists', ArtistController::class);
Route::resource('collections', CollectionController::class);
Route::resource('categories', CategoryController::class);
Route::resource('works', WorkController::class);
Route::resource('Events', EventController::class);

Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('artists', [Frontcontroller::class, 'artist'])->name('artist.index');
Route::get('events', [FrontController::class, 'event'])->name('event.index');
