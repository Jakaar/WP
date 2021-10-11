<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\MenuManageController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SeoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SiteInfoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\UserMenuController;

use Itwizard\Adminpanel\Http\Controllers\Marketing\PopupController;
use Itwizard\Adminpanel\Http\Controllers\Marketing\BannerController;

use Itwizard\Adminpanel\Http\Controllers\News\NewsController;

use Itwizard\Adminpanel\Http\Controllers\Users\PermissionController;

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){
    Route::get('/', function (){
        return redirect('/cms/dashboard');
    });
    Route::get('/dashboard', [AnalyticController::class, 'index']);
    Route::get('/dashboard/user_menu', [UserMenuController::class,  'index']);

    Route::get('/marketing', [BannerController::class,  'index']);
    Route::get('/popup', [PopupController::class, 'index']);

    Route::get('/news', [NewsController::class, 'index']);
    Route::get('/news/categories', [NewsController::class, 'category']);


    Route::get('/permission', [PermissionController::class, 'index']);
    Route::get('/permission/menu_manage', [MenuManageController::class,  'index']);

    Route::get('/settings', [SiteInfoController::class,  'index']);
    Route::get('/settings/seo_list', [SeoController::class,  'index']);

    Route::get('/settings/GetUsers', [PermissionController::class, 'GetUsers']);
});
