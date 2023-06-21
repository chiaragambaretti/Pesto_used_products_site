<?php

use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

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

//rotta home
Route::get('/', [FrontController::class, 'welcome'])->name('home');
//FrontController (categoryShow) si occuperà della visualizzazione a schermo di elementi accessibili a tutti gli utenti (loggati e non)
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');


//AnnouncementController (announcement.show) si occuperà della visualizzazione del dettaglio di ogni singolo annuncio
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');
//AnnouncementController (announcement.index) si occuperà della visualizzazione di ogni singolo annuncio presente 
Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');


//home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
//accetta annuncio
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('revisor.accept_announcement');
//rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('revisor.reject_announcement');


//rotta inserimento nuovo annuncio
Route::middleware(['auth'])->group(function(){

    Route::get('/new/announcement', function () {
        return view('announcement.create');
    })->name('announcement.create');

    // richiedi di diventare revisore
    Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');

});

// rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
