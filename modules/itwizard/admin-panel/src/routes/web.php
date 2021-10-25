<?php

use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SeoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SiteInfoController;
use Itwizard\Adminpanel\Http\Controllers\Profile\MyProfileController;
use Itwizard\Adminpanel\Http\Controllers\Users\PermissionController;

Route::group(['prefix'=>'cms','middleware'=>'auth'], function (){
    Route::get('/', function (){
        return redirect('/cms/dashboard');
    });
    Route::get('/dashboard', [AnalyticController::class, 'index']);
//    Route::get('/dashboard/user_menu', [UserMenuController::class,  'index']);

//    Route::get('/marketing', [BannerController::class,  'index']);
//    Route::get('/popup', [PopupController::class, 'index']);

//    Route::get('/gallery', [GalleryController::class, 'index']);

//    Route::get('/news', [NewsController::class, 'index']);
//    Route::get('/news/categories', [NewsController::class, 'category']);

    Route::get('/permission', [PermissionController::class, 'index']);
//    Route::get('/permission/menu_manage', [MenuManageController::class,  'index']);

    Route::get('/basic_settings', [SiteInfoController::class,  'index']);
    Route::get('/settings/seo_list', [SeoController::class,  'index']);
    Route::get('/settings/contactUs', [\Itwizard\Adminpanel\Http\Controllers\ContactUs\ContactUsController::class,  'index']);

    Route::get('/settings/GetUsers', [PermissionController::class, 'GetUsers']);

    Route::get('/myProfile', [MyProfileController::class, 'index']);

    Route::get('/noticeboard', [Itwizard\Adminpanel\Http\Controllers\NoticeBoardManagement\MainController::class, 'index']);
    Route::get('/settings/members', [PermissionController::class, 'Members']);

    Route::get('/cM', [\Itwizard\Adminpanel\Http\Controllers\Content\ContentController::class, 'index']);
    Route::get('/cM/menus', [\Itwizard\Adminpanel\Http\Controllers\Content\ContentController::class, 'menus']);
    Route::get('/{slug}/{view}', function ($slug, $view){
       return view('Admin::pages.'.$slug.'.'.$view);
    });
    Route::get('/{slug}', function ($slug){
        return view('Admin::pages.'.$slug.'.index');
    });
});
