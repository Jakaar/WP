<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;



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

Route::get('/',[\App\Http\Controllers\Client\MainController::class,'index']);
Route::get('/{id}/{slug}',[\App\Http\Controllers\Client\MainController::class,'viewer']);
Route::get('/{id}/{slug}/{uuid}',[\App\Http\Controllers\Client\MainController::class,'viewer']);
//user data
Route::post('/user_data_send',[\App\Http\Controllers\Client\MainController::class, 'client_form_data']);



