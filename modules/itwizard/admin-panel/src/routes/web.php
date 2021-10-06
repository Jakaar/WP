<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SeoController;

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){
    Route::get('/', function (){
       return redirect('cms/analytic');
    });
    Route::get('/analytic', [AnalyticController::class, 'index']);
    Route::get('/seo_list', [SeoController::class,  'index']);
});
