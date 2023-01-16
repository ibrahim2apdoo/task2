<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
//    Auth::routes();

    Route::get('/',  [HomeController::class,'index'])->name('home');
    Route::get('about',  [HomeController::class,'about'])->name('about');
    Route::get('team',  [HomeController::class,'team'])->name('team');
    Route::get('service',  [HomeController::class,'service'])->name('service');
    Route::get('contact',  [HomeController::class,'contact'])->name('contact');
    Route::get('blog',  [HomeController::class,'blog'])->name('blog');
});
