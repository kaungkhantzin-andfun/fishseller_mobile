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

Route::get('/', fn() => view('frontend.main'))->name('home');

// Product Routes
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', fn() => view('frontend.全ての商品'))->name('all');                     // All Products
    Route::get('/sale', fn() => view('frontend.選択されたセール商品'))->name('sale');         // Sale Products
    Route::get('/add', fn() => view('frontend.商品追加'))->name('add');                    // Add Product
    Route::get('/list', fn() => view('frontend.商品リスト'))->name('list');                // Product List
});

// Store Management Routes
Route::prefix('stores')->name('stores.')->group(function () {
    Route::get('/', fn() => view('frontend.販売者一覧'))->name('list');                    // Store List
    Route::get('/{id}', fn() => view('frontend.店舗詳細'))->name('detail');                // Store Detail
    Route::get('/manage', fn() => view('frontend.商品・店舗管理'))->name('manage');         // Store Management
    Route::get('/basic-info', fn() => view('frontend.基本情報'))->name('basic-info');      // Basic Information
});

// Order Management Routes
Route::prefix('orders')->name('orders.')->group(function () {
    Route::get('/', fn() => view('frontend.注文一覧'))->name('list');                      // Order List
    Route::get('/manage', fn() => view('frontend.注文管理'))->name('manage');              // Order Management
    Route::get('/process', fn() => view('frontend.注文処理'))->name('process');            // Order Processing
    Route::get('/{id}', fn() => view('frontend.注文詳細_details'))->name('detail');        // Order Details
});

// Payment Routes
Route::prefix('payment')->name('payment.')->group(function () {
    Route::get('/add-card', fn() => view('frontend.新しいクレジットカードを追加'))->name('add-card');  // Add New Credit Card
});

// Market Analysis Routes
Route::get('/wholesale', fn() => view('frontend.wholesale'))->name('wholesale');
Route::get('/wholesaletable', fn() => view('frontend.wholesaletable'))->name('wholesaletable');
Route::get('/deviation-ranking', fn() => view('frontend.deviation_ranking'))->name('deviation.ranking');
Route::get('/deviation-rating', fn() => view('frontend.deviation_rating'))->name('deviation.rating');

// Authentication Routes
Route::get('/login', fn() => view('frontend.login'))->name('login');
Route::get('/forgot-password', fn() => view('frontend.forgot_password'))->name('password.request');

// Account Routes
Route::prefix('account')->name('account.')->group(function () {
    Route::get('/', fn() => view('frontend.アカウント'))->name('index');
    Route::get('/security', fn() => view('frontend.アカウントとセキュリティ'))->name('security');
    Route::get('/security/edit', fn() => view('frontend.アカウントとセキュリティ（編集）'))->name('security.edit');
    Route::get('/address', fn() => view('frontend.ご住所と連絡先'))->name('address');
});

// Cart Routes
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/step1', fn() => view('frontend.cart_step1'))->name('step1');
    Route::get('/step3', fn() => view('frontend.cart_step3'))->name('step3');
    Route::get('/step4', fn() => view('frontend.cart_step4'))->name('step4');
    Route::get('/complete', fn() => view('frontend.cartstep_4_message'))->name('complete');
});

// Store Routes
Route::prefix('store')->name('store.')->group(function () {
    Route::get('/registration', fn() => view('frontend.iPhone 16 - 7'))->name('registration');
});

// Help & Support Routes
Route::prefix('help')->name('help.')->group(function () {
    Route::get('/faq', fn() => view('frontend.よくあるご質問'))->name('faq');
    Route::get('/faq/add', fn() => view('frontend.FAQを追加'))->name('faq.add');
    Route::get('/faq/detail', fn() => view('frontend.よくある質問_2'))->name('faq.detail');
});

// Legal Routes
Route::prefix('legal')->name('legal.')->group(function () {
    Route::get('/rules', fn() => view('frontend.利用規約'))->name('rules');                 // Terms of Service
    Route::get('/commerce', fn() => view('frontend.特商法に基づく表示'))->name('commerce');   // Commercial Law Disclosure
});