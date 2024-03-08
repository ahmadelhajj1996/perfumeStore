<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\AuthController;




Route::get('/categories',[GeneralController::class,'getCategories']);
Route::get('/products',[GeneralController::class,'getProducts']);
Route::get('/users',[GeneralController::class,'getUsers']);



Route::group(['middleware'=>'api'],function(){
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
});


// Route::group(['middleware'=>'auth:api'],function(){
//     Route::group(['prefix'=>'users'],function(){
//         Route::get('/profile',[AuthController::class,'profile']);
//         Route::post('/logout',[AuthController::class,'logout']);

//     });
// });
