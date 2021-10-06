<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\ContactUs\MessageController;
$namespace = 'Itwizard\Adminpanel\Http\Controllers';


//Route::get('/lang/{locale}', function ($locale){
//        if (! in_array($locale, ['en', 'kr'])) {
//            abort(400);
//        }
//
//        Session::put('locale', $lang);
//        return redirect()->back();
////    return __('title');
//});

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){

//    Route::get('/', [ContactUsController::class,'index']);
    Route::get('/', [MessageController::class,'index']);
//    Route::get('/', function (){
//        Session::put('locale', 'en');
//        App::setLocale(Session::get('locale'));
//        dd(App::getLocale(), Session::get('locale'));
//    });

});
