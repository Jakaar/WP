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
//Customer register
Route::get('/customer/register',[\App\Http\Controllers\Auth\RegisterController::class, 'registerForm'])->name('register.form');
Route::post('/post-registration',[\App\Http\Controllers\Auth\RegisterController::class,'store']);
//Customer login
Route::get('/customer/login', [\App\Http\Controllers\Auth\SessionsController::class,'create'])->name('customer.login');
Route::post('/customers/login', [\App\Http\Controllers\Auth\SessionsController::class,'store'])->name('customers.login');
Route::get('/logout', [\App\Http\Controllers\Auth\SessionsController::class,'destroy'])->name('customer.logout');

Route::get('/customer/products', [\App\Http\Controllers\Client\MainController::class,'products']);

Route::get('/dtlpgdt/{uuid}/', [\App\Http\Controllers\Client\MainController::class,'BlogDetail']);
Route::get('/{slug}/{id}/gllr/{uuid}/', [\App\Http\Controllers\Client\MainController::class,'GalleryDetail']);
Route::get('/terms_of_use', [SiteInfoController::class, 'terms_of_use']);
Route::get('/privacy_policy', [SiteInfoController::class, 'privacy_policy']);

Route::get('/',[\App\Http\Controllers\Client\MainController::class,'index']);
Route::get('/{id}/{slug}',[\App\Http\Controllers\Client\MainController::class,'viewer']);
Route::get('/{id}/{slug}/{uuid}',[\App\Http\Controllers\Client\MainController::class,'viewer']);
//user data
Route::post('/user_data_send',[\App\Http\Controllers\Client\MainController::class, 'client_form_data']);



