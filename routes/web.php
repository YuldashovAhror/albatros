<?php

use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\BrendController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\NewsCategoryController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PartnerController;
use App\Http\Controllers\Dashboard\ProductController;
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
    });
});


require __DIR__.'/auth.php';
