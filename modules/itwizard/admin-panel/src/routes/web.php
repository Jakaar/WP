<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SeoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SiteInfoController;

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){
    Route::get('/', function (){
       return redirect('cms/analytic');
    });
    Route::get('/analytic', [AnalyticController::class, 'index']);
    Route::get('/seo_list', [SeoController::class,  'index']);
    Route::get('/site_info', [SiteInfoController::class,  'index']);
});
