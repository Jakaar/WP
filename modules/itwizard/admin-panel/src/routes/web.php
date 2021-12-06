<?php

use App\Models\Permission;
use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\AnalyticController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SeoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\SiteInfoController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\termsController;
use Itwizard\Adminpanel\Http\Controllers\Dashboard\privacyController;
use Itwizard\Adminpanel\Http\Controllers\Product\ProductCreateController;
use Itwizard\Adminpanel\Http\Controllers\Profile\MyProfileController;
use Itwizard\Adminpanel\Http\Controllers\Users\PermissionController;
use Itwizard\Adminpanel\Http\Controllers\Preferences\PreferencesController;
use Itwizard\Adminpanel\Http\Controllers\Banner\BannerController;
use Itwizard\Adminpanel\Http\Controllers\StaticFile\StaticFileController;
use Itwizard\Adminpanel\Http\Controllers\Language\LanguageController;
use App\Http\Controllers\Auth\GoogleController;
use Itwizard\Adminpanel\Http\Controllers\LogViewer\LogViewerController;
use Itwizard\Adminpanel\Http\Controllers\Users\MemberController;

//Route::get('/', function (){
//    return redirect('/cms/dashboard');
//});
Route::group(['middleware' => ['web']], function () {
    Route::get('/auth/login/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/login/google/callback',[App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);
    Route::post('/loginKakao', [App\Http\Controllers\Auth\KakaoController::class,'store']);
});
Route::group(['prefix'=>'cms', 'middleware' => ['auth','role:owner']],function(){
    Route::get('/preferences',[PreferencesController::class, 'index']);
    Route::get('/preferences/logger',[PreferencesController::class, 'logger']);
    Route::get('/preferences/menu',[PreferencesController::class, 'menu']);
    Route::get('/preferences/static_file',[StaticFileController::class, 'index']);
    Route::get('/preferences/language',[LanguageController::class, 'index']);
    Route::get('/preferences/board_type',[PreferencesController::class, 'board_type']);

});

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


//    Route::get('/permission/menu_manage', [MenuManageController::class,  'index']);

    Route::get('/basic_setting', [SiteInfoController::class,  'index']);
    Route::get('/terms', [SiteInfoController::class, 'terms']);
    Route::get('/privacy', [SiteInfoController::class, 'privacy']);
    Route::get('/terms_of_use', [SiteInfoController::class, 'terms_of_use']);
    Route::get('/privacy/policy', [SiteInfoController::class, 'privacy_policy']);
    Route::get('/settings/seo_list', [SeoController::class,  'index']);
    Route::get('/settings/contactUs', [\Itwizard\Adminpanel\Http\Controllers\ContactUs\ContactUsController::class,  'index']);

    Route::get('/settings/GetUsers', [PermissionController::class, 'GetUsers']);

    Route::get('/manage_pages', [\Itwizard\Adminpanel\Http\Controllers\Page\PageManageController::class, 'index']);
//    Route::get('/manage_pages/{slug}/page_content',[\Itwizard\Adminpanel\Http\Controllers\Page\PageManageController::class, 'page_content']);
    Route::get('/manage_pages/{id}/{board}',[\Itwizard\Adminpanel\Http\Controllers\Page\PageManageController::class, 'detector']);
    Route::get('/manage_pages/{id}/{board}/{uuid}',[\Itwizard\Adminpanel\Http\Controllers\Page\PageManageController::class, 'detector']);

    Route::get('/manage_pages/{slug}/page_content/{id}',[\Itwizard\Adminpanel\Http\Controllers\Page\PageManageController::class, 'page_content_details'])
    ->name('page_content');


    Route::get('/myProfile', [MyProfileController::class, 'index']);

    Route::get('/noticeboard', [Itwizard\Adminpanel\Http\Controllers\NoticeBoardManagement\MainController::class, 'index']);
    Route::get('/noticeboard/search', [Itwizard\Adminpanel\Http\Controllers\NoticeBoardManagement\MainController::class, 'search']);

    Route::get('/member_manage/users', [MemberController::class, 'Member']);
    Route::get('/member_management/admin', [PermissionController::class, 'Members'])->middleware(['permission:member-read']);

    Route::get('/member_management/users', [PermissionController::class, 'Members'])->middleware(['permission:member-read']);
    Route::get('/member_management/permission', [PermissionController::class, 'index'])->middleware(['permission:role-read']);
    Route::get('/member_management/settings', [PermissionController::class, 'settings'])->middleware(['permission:permission-read']);

    Route::get('/banner',[BannerController::class, 'index'])->middleware(['permission:banner-read']);

    //suppliers
    Route::get('/suppliers',[Itwizard\Adminpanel\Http\Controllers\Mail\MailController::class, 'index']);

    // form_builded
    Route::get('/suppliers/create',[Itwizard\Adminpanel\Http\Controllers\FormBuild\FormBuildController::class, 'index']);


    Route::get('/basic_setting/adminSettings',[PermissionController::class, 'adminSettings']);
    Route::get('/member_management/secessionist',[PermissionController::class, 'secessionist']);

    Route::get('/User/LogViewer',[LogViewerController::class, 'index']);

//    Route::get('/product_management/manageCategory',[\Itwizard\Adminpanel\Http\Controllers\Product\manageCategoryController::class, 'index']);
//    Route::get('/product_management/productManage',[\Itwizard\Adminpanel\Http\Controllers\Product\ProductCategoryController::class, 'index']);

    Route::get('/products',[\Itwizard\Adminpanel\Http\Controllers\Product\ProductController::class,'index'])->middleware(['permission:product-read']);
    Route::post('/product/create',[\Itwizard\Adminpanel\Http\Controllers\Product\ProductCreateController::class,'CreateItem'])->middleware(['permission:product-create']);;
    Route::post('/product/update/{id}',[\Itwizard\Adminpanel\Http\Controllers\Product\ProductCreateController::class,'UpdateItem'])->middleware(['permission:product-update']);;


    Route::get('/products/index',[ProductCreateController::class, 'index']);
    Route::get('/categories',[\Itwizard\Adminpanel\Http\Controllers\Product\CategoryController::class,'index']);



    Route::get('/cM', [\Itwizard\Adminpanel\Http\Controllers\Content\ContentController::class, 'index']);
    Route::get('/user_menu', [\Itwizard\Adminpanel\Http\Controllers\Content\ContentController::class, 'menus'])->middleware(['permission:userMenu-read']);


    Route::get('/file/download/app/client/form/files/{filename}', [Itwizard\Adminpanel\Http\Controllers\Mail\MailController::class, 'download']);
//    Route::get('/{slug}/{view}', function ($slug, $view){
//
//       return view('Admin::pages.'.$slug.'.'.$view);
//    });
//    Route::get('/{slug}', function ($slug){
//        return view('Admin::pages.'.$slug.'.index');
//    });
    Route::get('/test',function (){
        $user = \App\User::find(1);
        $user->attachRole('owner');
    });

});
