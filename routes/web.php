<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\BlogController;
use App\Http\Controllers\Users\ClientController;
use App\Http\Controllers\Users\ContactController;
use App\Http\Controllers\Users\PartenerController;
use App\Http\Controllers\Users\ProjectController;
use App\Http\Controllers\Users\serviceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
//    Auth::routes();

    Route::get('/',  [HomeController::class,'index'])->name('home');
    Route::get('about',  [HomeController::class,'about'])->name('about');
    Route::get('service',  [serviceController::class,'service'])->name('service');
    Route::get('service/show/{id}',  [serviceController::class,'show'])->name('service.show');
    Route::get('project/show/{id}',  [ProjectController::class,'show'])->name('project.show');
    Route::get('contact',  [ContactController::class,'index'])->name('contact');
    Route::get('contact/index',  [ContactController::class,'contact'])->name('contact.index');
    Route::post('contact/store',  [ContactController::class,'store'])->name('user.contact.store');
    Route::get('blog',  [BlogController::class,'blog'])->name('blog');
    Route::get('blog/show/{id}',  [BlogController::class,'show'])->name('user.blog.show');
    Route::get('blog/index',  [BlogController::class,'index'])->name('user.blog.index');
    Route::get('partners',  [PartenerController::class,'index'])->name('partners');
    Route::get('clients',  [ClientController::class,'index'])->name('clients');
    Route::get('projects',  [ProjectController::class,'index'])->name('projects');

});
