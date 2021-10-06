<?php
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/lang/{locale}', function ($lang) {

//     if (array_key_exists($lang, Config::get('locale'))) {
    Session::put('locale', $lang);
//    App::setLocale(Session()->get('locale'));
    // }
    return redirect()->back();
});
