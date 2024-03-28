<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClothesController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);




// Localization Route
Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');





// Route::get('home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
Route::get('home', [HomeController::class, 'dashboard'])
    ->name('home')
    ->middleware(['auth', 'verified']); 



Route::get('seller/profile', [App\Http\Controllers\HomeController::class, 'sellerProfile'])->name('seller.profile');
Route::get('seller/purchaseHistory', [App\Http\Controllers\HomeController::class, 'purchaseHistory'])->name('seller.purchaseHistory');
Route::get('seller/downloads', [App\Http\Controllers\HomeController::class, 'downloads'])->name('seller.downloads');
Route::get('seller/refund', [App\Http\Controllers\HomeController::class, 'refund'])->name('seller.refund');
Route::get('seller/wishlist', [App\Http\Controllers\HomeController::class, 'wishlist'])->name('seller.wishlist');
Route::get('seller/classifiedProducts', [App\Http\Controllers\HomeController::class, 'classifiedProducts'])->name('seller.classifiedProducts');
Route::get('seller/Biddedproducts', [App\Http\Controllers\HomeController::class, 'Biddedproducts'])->name('seller.Biddedproducts');
Route::get('seller/conversations', [App\Http\Controllers\HomeController::class, 'conversations'])->name('seller.conversations');
Route::get('seller/mywallet', [App\Http\Controllers\HomeController::class, 'mywallet'])->name('seller.mywallet');
Route::get('seller/earnings', [App\Http\Controllers\HomeController::class, 'earnings'])->name('seller.earnings');
Route::get('seller/affiliate', [App\Http\Controllers\HomeController::class, 'affiliate'])->name('seller.affiliate');
Route::get('seller/support', [App\Http\Controllers\HomeController::class, 'support'])->name('seller.support');
Route::get('seller/auction', [App\Http\Controllers\HomeController::class, 'Auction'])->name('seller.Auction');



Route::get('seller/manage_account/{user}', [App\Http\Controllers\HomeController::class, 'ManageAccount'])->name('seller.ManageAccount');
// Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
Route::put('seller/manage_account/{user}}', [UserController::class, 'update'])->name('users.update');

Route::put('seller/manage_account/{user}', [UserController::class, 'updateEmail'])->name('users.update.email');
Route::put('seller/manage_account1/{user}', [UserController::class, 'updateAddress'])->name('users.update.address');



// Route::controller(GoogleController::class)->group(function(){
//     Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
//     Route::get('auth/google/callback', 'handleGoogleCallback');
// });

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);


Route::get('seller/clothes', [ClothesController::class, 'index'])->name('clothes.index');
Route::get('seller/clothes/create', [ClothesController::class, 'create'])->name('clothes.create');
Route::post('seller/clothes', [ClothesController::class, 'store'])->name('clothes.store');
Route::get('seller/clothes/{clothes}', [ClothesController::class, 'show'])->name('clothes.show');
Route::get('seller/clothes/{clothes}/edit', [ClothesController::class, 'edit'])->name('clothes.edit');
Route::put('seller/clothes/{clothes}', [ClothesController::class, 'update'])->name('clothes.update');

Route::delete('seller/clothes/{clothes}', [ClothesController::class, 'destroy'])->name('clothes.destroy');