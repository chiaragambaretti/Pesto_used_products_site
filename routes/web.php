<?php

use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Models\Announcement;

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

Route::get('/', [FrontController::class, 'welcome'])->name('home');
Route::get('/categoria/{category}', [FrontController::class, 'categoryShow'])->name('categoryShow');
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcement.show');
Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcement.index');



//rotta inserimento nuovo annuncio
Route::middleware(['auth'])->group(function(){

    Route::get('/new/announcement', function () {
        return view('announcement.create');
    })->name('announcement.create');
});
