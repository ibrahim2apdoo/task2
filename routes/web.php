<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\BlogController;
use App\Http\Controllers\Users\ContactController;
use App\Http\Controllers\Users\PartenerController;
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
    Route::get('service/show/{id}',  [HomeController::class,'show'])->name('service.show');
    Route::get('contact',  [ContactController::class,'index'])->name('contact');
    Route::get('blog',  [BlogController::class,'blog'])->name('blog');
    Route::get('partners',  [PartenerController::class,'index'])->name('partners');

});
