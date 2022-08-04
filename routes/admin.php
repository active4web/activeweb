<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SocialMediaController;


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('admin.home');
});

Route::group([ 'as'=>'Admin.', 'middleware'=>'auth' ],function(){
          
                    /*   setting */
  Route::group(['prefix'=> 'setting', 'as' => 'setting.'],function(){
      Route::get('/edit',[SettingController::class,'edit'])->name('edit');
      Route::put('/update',[SettingController::class,'update'])->name('update');
  });
                   /*   social media */
  Route::group(['prefix'=> 'socialmedia', 'as' => 'socialmedia.'],function(){
    Route::get('/',[SocialMediaController::class,'index'])->name('index');
    Route::put('/update/{id}',[SocialMediaController::class,'update'])->name('update');
});
                  
                   /*   banners    */
Route::group(['prefix'=> 'banner', 'as' => 'banner.'],function(){
    Route::get('/',[BannerController::class,'index'])->name('index');
    Route::get('/create',[BannerController::class,'create'])->name('create');
    Route::post('/store',[BannerController::class,'store'])->name('store');
    Route::put('/update/{id}',[BannerController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[BannerController::class,'destroy'])->name('destroy');
});
});