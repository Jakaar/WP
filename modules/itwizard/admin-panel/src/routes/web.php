<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\BannerController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\MenuManageController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SeoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SiteInfoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\UserMenuController;
use Itwizard\Adminpanel\Http\Controllers\Users\PermissionController;

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){
    Route::get('/', function (){
       return redirect('cms/analytic');
    });
    // Jakaar
    Route::get('/analytic', [AnalyticController::class, 'index']);
    Route::get('/permission', [PermissionController::class, 'index']);

    // Zanaa
    Route::get('/seo_list', [SeoController::class,  'index']);
    Route::get('/site_info', [SiteInfoController::class,  'index']);
    Route::get('/banner', [BannerController::class,  'index']);
    Route::get('/user_menu', [UserMenuController::class,  'index']);
    Route::get('/menu_manage', [MenuManageController::class,  'index']);
});
