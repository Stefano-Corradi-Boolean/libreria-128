<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

// come secondo parametro al posto della function() tra le quadre scrivo [MioController::class, 'funzioneDelController']
Route::get('/', [PageController::class, 'index'] )->name('home');
Route::get('/chi-siamo', [PageController::class, 'about'] )->name('about');
Route::get('/contatti', [PageController::class, 'contacts'] )->name('contacts');
Route::get('/i-mei-libri', [PageController::class, 'books'] )->name('books');
Route::get('/i-libri-brutti', [PageController::class, 'bedBooks'] )->name('bedBooks');
Route::get('/i-libri-belli', [PageController::class, 'bestBooks'] )->name('bestBooks');
// questa rotta riceve dinamicamente l'id del libro
Route::get('/dettaglio-libro/{id}', [PageController::class, 'bookDetail'] )->name('bookDetail');
