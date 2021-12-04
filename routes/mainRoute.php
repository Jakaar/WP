<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SiteInfoController;



Auth::routes();

Route::get('lang/{locale}', function ($lang) {

//     if (array_key_exists($lang, Config::get('locale'))) {
    Session::put('locale', $lang);
    Carbon::setLocale($lang);
//    App::setLocale(Session()->get('locale'));
    // }
    return redirect()->back();
});

Route::get('/dtlpgdt/{uuid}/', [\App\Http\Controllers\Client\MainController::class,'BlogDetail']);
Route::get('/{slug}/{id}/gllr/{uuid}/', [\App\Http\Controllers\Client\MainController::class,'GalleryDetail']);
Route::get('/terms_of_use', [SiteInfoController::class, 'terms_of_use']);
Route::get('/privacy_policy', [SiteInfoController::class, 'privacy_policy']);

Route::get('/',[\App\Http\Controllers\Client\MainController::class,'index']);
Route::get('/{id}/{slug}',[\App\Http\Controllers\Client\MainController::class,'viewer']);
Route::get('/{id}/{slug}/{uuid}',[\App\Http\Controllers\Client\MainController::class,'viewer']);


