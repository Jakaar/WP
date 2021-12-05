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
    Route::post('/DeleteBoard/{id}', [BoardMasterController::class, 'DeleteBoard']);
    Route::get('/editboard/{id}', [BoardMasterController::class, 'editBoard']);
    Route::post('/updateboard', [BoardMasterController::class, 'updateboard']);

    Route::post('/profile/update', [\Itwizard\Adminpanel\Http\ApiControllers\User\ProfileController::class, 'update']);
    Route::post('/profile/updatePassword', [\Itwizard\Adminpanel\Http\ApiControllers\User\ProfileController::class, 'updatePassword']);

    Route::post('/settings/siteinfo/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\SiteInfoController::class, 'update']);
    Route::post('/settings/siteinfo/termsUpdate', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\SiteInfoController::class, 'termsUpdate']);
    Route::post('/settings/siteinfo/privacyUpdate', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\SiteInfoController::class, 'privacyUpdate']);
    Route::post('/settings/contactUs/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\ContactusController::class, 'update']);
    Route::post('/news/category/delete/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\News\CategoryController::class, 'delete']);

    Route::post('/member/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'update']);
    Route::post('/single/user/data', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'singleUserData']);
    Route::post('/user/delete', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\MemberController::class, 'delete']);

    Route::post('/addbanner', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'addbanner']);
    Route::post('/DeleteBanner/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'DeleteBanner']);
    Route::get('/editbanner/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'editbanner']);
    Route::post('/updatebanner', [\Itwizard\Adminpanel\Http\ApiControllers\Banner\BannerController::class, 'updateBanner']);

    Route::post('/addfile', [\Itwizard\Adminpanel\Http\ApiControllers\StaticFile\StaticFileController::class, 'addfile']);
    Route::get('/editfile/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\StaticFile\StaticFileController::class, 'editStaticFile']);
    Route::post('/DeleteFile/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\StaticFile\StaticFileController::class, 'DeleteStaticFile']);
    Route::post('/updatefile', [\Itwizard\Adminpanel\Http\ApiControllers\StaticFile\StaticFileController::class, 'updateStaticFile']);

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

    Route::post('/permission/adminUpdate', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'adminUpdate']);
    Route::post('/permission/adminEdit', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'adminEdit']);
    Route::post('/permission/adminDelete', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'adminDelete']);
    Route::post('/permission/adminCreate', [\Itwizard\Adminpanel\Http\ApiControllers\Users\PermissionController::class, 'adminCreate']);


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

    Route::post('/preferences/board_type/create', [PreferencesController::class, 'createBoardType']);
    Route::post('/preferences/board_type/delete',[PreferencesController::class, 'deleteBoardType']);

    Route::post('/preferences/language/create', [Itwizard\Adminpanel\Http\ApiControllers\Language\LanguageController::class,  'createLanguage']);
    Route::post('/preferences/language/update', [Itwizard\Adminpanel\Http\ApiControllers\Language\LanguageController::class,  'updateLanguage']);
    Route::post('/preferences/language/delete', [Itwizard\Adminpanel\Http\ApiControllers\Language\LanguageController::class,  'deleteLanguage']);
    Route::post('/preferences/language/edit', [Itwizard\Adminpanel\Http\ApiControllers\Language\LanguageController::class,  'editLanguage']);

    // Route::post('/mail/create', [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,  'mailCreate']);
    // Route::post('/mail/update', [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,  'mailUpdate']);
    Route::post('/mail/delete', [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,  'mailDelete']);
    // Route::post('/mail/edit', [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,  'mailEdit']);
    Route::post('/mail/send', [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,  'mailSend']);
//
// client_data_view
Route::get('/client_view/{view_id}',  [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,'client_view']);
Route::post('/client_data_delete',  [Itwizard\Adminpanel\Http\ApiControllers\Mail\MailController::class,'client_data_delete']);

    Route::post('/cM', [Itwizard\Adminpanel\Http\ApiControllers\Content\ContentController::class, 'show']);
    Route::post('/GetContentData', [\Itwizard\Adminpanel\Http\ApiControllers\Content\ContentController::class, 'GetContentData']);
    Route::post('/DeleteMenu/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'DeleteMenu']);

    Route::post('/CreateMenu', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'CreateMenu']);
    Route::post('/get/menu', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'getMenu']);
    Route::post('/menu/update', [\Itwizard\Adminpanel\Http\ApiControllers\Content\MenuController::class, 'updateMenu']);

    Route::post('/contentcategory/create', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class, 'contentcategory']);
    Route::post('/content/create', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class, 'contentcreate'])->name('save.content');
    Route::post('/managepage/delete/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class, 'DeletePage']);

//    Route::post('/manageCategory/create', [\Itwizard\Adminpanel\Http\Controllers\Product\manageCategoryController::class, 'create']);
//    Route::post('/manageCategory/update', [\Itwizard\Adminpanel\Http\Controllers\Product\manageCategoryController::class, 'update']);
//    Route::post('/manageCategory/singleProduct', [\Itwizard\Adminpanel\Http\Controllers\Product\manageCategoryController::class, 'singleProduct']);
//    Route::post('/manageCategory/delete/{id}', [\Itwizard\Adminpanel\Http\Controllers\Product\manageCategoryController::class, 'deletePage']);

//    Route::post('/productManage/create', [\Itwizard\Adminpanel\Http\Controllers\Product\ProductCategoryController::class, 'create']);
//    Route::post('/productManage/singleProduct', [\Itwizard\Adminpanel\Http\Controllers\Product\ProductCategoryController::class, 'singleProduct']);
//    Route::post('/productManage/update', [\Itwizard\Adminpanel\Http\Controllers\Product\ProductCategoryController::class, 'update']);
//    Route::post('/productManage/delete/{id}', [\Itwizard\Adminpanel\Http\Controllers\Product\ProductCategoryController::class, 'delete']);


    Route::post('/ProductCodeGenerate', [\Itwizard\Adminpanel\Http\Controllers\Product\ProductCreateController::class, 'ProductCodeCheck']);

    Route::post('/product/getData',[\Itwizard\Adminpanel\Http\ApiControllers\Product\ProductController::class, 'getData']);
    Route::post('/product/status/{id}',[\Itwizard\Adminpanel\Http\ApiControllers\Product\ProductController::class, 'statusChanger']);
    Route::post('/product/delete/{id}',[\Itwizard\Adminpanel\Http\ApiControllers\Product\ProductController::class, 'DeleteItem']);
    Route::post('/product/multiple/delete',[\Itwizard\Adminpanel\Http\ApiControllers\Product\ProductController::class, 'MultipleDelete']);
    Route::post('/product/copy',[\Itwizard\Adminpanel\Http\ApiControllers\Product\ProductController::class, 'copy']);

    Route::post('/category/create',[\Itwizard\Adminpanel\Http\ApiControllers\Product\CategoryController::class, 'create']);
    Route::post('/category/delete',[\Itwizard\Adminpanel\Http\ApiControllers\Product\CategoryController::class, 'delete']);
    Route::post('/category/getData',[\Itwizard\Adminpanel\Http\ApiControllers\Product\CategoryController::class, 'getData']);
    Route::post('/category/update',[\Itwizard\Adminpanel\Http\ApiControllers\Product\CategoryController::class, 'update']);

    Route::post('/ck/file-upload',[\Itwizard\Adminpanel\Http\ApiControllers\Upload\UploadController::class, 'FromCK']);

    Route::post('/ck/file-upload/image', [\Itwizard\Adminpanel\Http\ApiControllers\Upload\UploadController::class, 'FromCKImage']);

    Route::post('/reset/password',[\App\Http\Controllers\Auth\PasswordResetController::class, 'ResetRequest' ])->name('reset.password');
    Route::post('/reset/checker',[\App\Http\Controllers\Auth\PasswordResetController::class, 'checker' ]);
    Route::post('/reset/updatePassword',[\App\Http\Controllers\Auth\PasswordResetController::class, 'updatePassword' ]);
    Route::post('/validate/token',[\App\Http\Controllers\Auth\PasswordResetController::class, 'validateToken' ])->name('validate.token');

    Route::post('/dashboard/GetContent',[\Itwizard\Adminpanel\Http\ApiControllers\Analytic\AnalyticController::class,'GetContentData']);

    Route::post('/form/create', [\Itwizard\Adminpanel\Http\ApiControllers\Form\FormController::class,'create']);
    Route::post('/form/delete', [\Itwizard\Adminpanel\Http\ApiControllers\Form\FormController::class,'delete']);
    Route::post('/form/edit', [\Itwizard\Adminpanel\Http\ApiControllers\Form\FormController::class,'edit']);
    Route::post('/form/update', [\Itwizard\Adminpanel\Http\ApiControllers\Form\FormController::class,'update']);


    Route::post('/FAQ/create', [\Itwizard\Adminpanel\Http\ApiControllers\FAQ\FAQController::class,'create']);
    Route::post('/FAQ/delete/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\FAQ\FAQController::class,'delete']);
    Route::post('/FAQ/edit/', [\Itwizard\Adminpanel\Http\ApiControllers\FAQ\FAQController::class,'edit']);
    Route::post('/FAQ/update/', [\Itwizard\Adminpanel\Http\ApiControllers\FAQ\FAQController::class,'update']);

    Route::post('/Gallery/GetContent/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class,'GalleryGetContent']);
    Route::post('/Gallery/CreateContent/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class,'GalleryCreateContent']);

    Route::post('/SinglePage/create', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class, 'SinglePageCreate']);

    Route::post('/Content/Category/create', [\Itwizard\Adminpanel\Http\ApiControllers\Page\PageContentController::class,'CategoryCreate']);
});
