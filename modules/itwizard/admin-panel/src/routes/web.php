<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\ContactUs\MessageController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){
    Route::get('/', function (){
       return redirect('cms/analytic');
    });
    Route::get('/analytic', [AnalyticController::class, 'index']);
});
