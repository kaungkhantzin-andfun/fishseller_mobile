<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn() => view('frontend.home'))->name('home');
Route::get('/wholesale', fn() => view('frontend.wholesale'))->name('wholesale');
Route::get('/wholesaletable', fn() => view('frontend.wholesaletable'))->name('wholesaletable');
Route::get('/deviation_ranking', fn() => view('frontend.deviation_ranking'))->name('deviation_ranking');
Route::get('/deviation_rating', fn() => view('frontend.deviation_rating'))->name('deviation_rating');