<?php

use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\BrendController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\FeedbackController;
use App\Http\Controllers\Dashboard\InfoCategoryController;
use App\Http\Controllers\Dashboard\InformationController;
use App\Http\Controllers\Dashboard\NewsCategoryController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ResumeController;
use App\Http\Controllers\Dashboard\VacancyController;
use Illuminate\Support\Facades\Route;

//Localization
Route::get('/ru', function () {
    session()->put('locale', 'ru');
    return redirect()->back();
})->name('languages');
Route::get('/uz', function () {
        session()->put('locale', 'uz');
        return redirect()->back();
})->name('languages');

//Front
Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('main');

//Dashboard
Route::group(['prefix' => 'dashboard'], function (){
    Route::name('dashboard.')->group(function (){

        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
        Route::resource('/brend', BrendController::class);
        Route::resource('/banner', BannerController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/newcategory', NewsCategoryController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('/partners', PartnerController::class);
        Route::resource('/vacancy', VacancyController::class);
        Route::resource('/resume', ResumeController::class);
        Route::resource('/infocat', InfoCategoryController::class);
        Route::resource('/info', InformationController::class);
        Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
        Route::get('/feedback/store', [FeedbackController::class, 'store']);
        Route::post('/feedback/contacts', [FeedbackController::class, 'store']);
        
    });
});

////// Front ////
Route::get('/about', function(){
    return view('front.about');
});
Route::get('/catalog', function(){
    return view('front.catalog');
});
Route::get('/contact', function(){
    return view('front.contact');
});
Route::get('/event', function(){
    return view('front.events');
});
Route::get('/partners', function(){
    return view('front.partners');
});
Route::get('/info', function(){
    return view('front.knowledge');
});
require __DIR__.'/auth.php';
