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
Route::get('/faq', fn() => view('frontend.include.faqを追加'))->name('faq');
Route::get('/registration', fn() => view('frontend.include.registration'))->name('registration');
Route::get('/account', fn() => view('frontend.include.アカウント'))->name('account');
Route::get('/inquiry', fn() => view('frontend.include.お問い合わせ内容'))->name('inquiry');
Route::get('/user', fn() => view('frontend.include.ユーザー'))->name('user');