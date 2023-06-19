<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

//rotta inserimento nuovo annuncio
Route::middleware(['auth'])->group(function(){

    Route::get('/new/announcement', function () {
        return view('announcement.create');
    })->name('announcement.create');
});
