<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\ApiControllers\Board\BoardMasterController;
use Itwizard\Adminpanel\Http\ApiControllers\Preferences\PreferencesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'api'], function () {
    Route::get('/availableLanguages', function () {
        return response()->json(['data' => DB::table('wpanel_available_language')->get()], 200);
    });
    Route::post('/board/create', [BoardMasterController::class, 'create']);

    Route::post('/profile/update', [\Itwizard\Adminpanel\Http\ApiControllers\User\ProfileController::class, 'update']);
    Route::post('/profile/updatePassword', [\Itwizard\Adminpanel\Http\ApiControllers\User\ProfileController::class, 'updatePassword']);

    Route::post('/settings/siteinfo/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\SiteInfoController::class, 'update']);
    Route::post('/settings/contactUs/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\ContactusController::class, 'update']);
    Route::post('/news/category/delete/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\News\CategoryController::class, 'delete']);

    Route::post('/member/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'update']);
    Route::post('/single/user/data', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'singleUserData']);
    Route::post('/user/delete', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'delete']);

    Route::post('/addbanner', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'addbanner']);
    Route::post('/DeleteBanner/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'DeleteBanner']);
    Route::get('/editbanner/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'editbanner']);
    Route::post('/updatebanner', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'updateBanner']);

    Route::post('/member/create', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'create']);
    Route::post('/permission/create', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'create']);

    Route::post('/member/role/update', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'roleUpdate']);
    Route::post('/member/role/remove', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'roleRemove']);
    Route::post('/role/single', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'roleSingle']);

    Route::post('/permission/get', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'getPermission']);
    Route::post('/permission/settings/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'permissionSettingsUpdate']);
    Route::post('/permission/settings/create', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'permissionSettingsCreate']);
    Route::post('/permission/settings/delete', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'permissionSettingsDelete']);
    Route::post('/permission/update', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'permissionUpdate']);
    Route::post('/permission/delete', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'permissionDelete']);

    Route::group(['middleware' => 'user_accessible'], function () {
        Route::post('/preferences/create', [PreferencesController::class, 'create']);
        Route::post('/preferences/update', [PreferencesController::class, 'update']);
        Route::post('/preferences/delete', [PreferencesController::class, 'delete']);
        Route::post('/preferences/change', [PreferencesController::class, 'change']);

        Route::post('/preferences/menu/create', [PreferencesController::class, 'menuCreate']);
        Route::post('/preferences/menu/update',[PreferencesController::class, 'menuUpdate']);
        Route::post('/preferences/menu/updates',[PreferencesController::class, 'menuUpdates']);
        Route::post('/preferences/menu/single',[PreferencesController::class, 'menuSingle']);
        Route::post('/preferences/menu/delete',[PreferencesController::class, 'menuDelete']);
    });

    Route::post('/cM', [Itwizard\Adminpanel\Http\ApiControllers\Content\ContentController::class, 'show']);
    Route::post('/GetContentData', [\Itwizard\Adminpanel\Http\ApiControllers\Content\ContentController::class, 'GetContentData']);
    Route::post('/DeleteMenu/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'DeleteMenu']);

    Route::post('/CreateMenu', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'CreateMenu']);
    Route::post('/get/menu', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'getMenu']);
    Route::post('/menu/update', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'updateMenu']);

    Route::post('/contentcategory/create', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class, 'contentcategory']);
    Route::post('/managepage/delete/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class, 'DeletePage']);

});
