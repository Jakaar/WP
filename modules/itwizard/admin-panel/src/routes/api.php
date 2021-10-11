<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Itwizard\Adminpanel\Http\ApiControllers\User\ProfileController;

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
    Route::post('/profile/update', [ProfileController::class, 'update']);
});

// middleware('auth:api')
