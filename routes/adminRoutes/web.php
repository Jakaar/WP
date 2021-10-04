<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin', 'as'=>'admin','middleware'=>'auth'], function (){
    Route::get('/', function (){
        return redirect('admin/users');
    });
   Route::get('/users', [\App\Http\Controllers\admin\SettingsController::class, 'users']);
   Route::get('/contact-us', [\App\Http\Controllers\admin\ContactController::class, 'index']);
});
