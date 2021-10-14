<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\ApiControllers\Board\BoardMasterController;

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


Route::group(['prefix'=>'api'], function (){
    Route::post('/board/create', [BoardMasterController::class, 'create']);

    Route::post('/profile/update', [\Itwizard\Adminpanel\Http\ApiControllers\User\ProfileController::class, 'update']);
    Route::post('/settings/siteinfo/update', [\Itwizard\Adminpanel\Http\ApiControllers\Settings\SiteInfoController::class, 'update']);

    Route::post('/news/category/delete/{id}', [\Itwizard\Adminpanel\Http\ApiControllers\News\CategoryController::class,'delete']);
});

// middleware('auth:api')
