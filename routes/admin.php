<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OurWorkController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AboutStepController;
use App\Http\Controllers\Admin\BlogDetailController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\BlogComponentController;
use App\Http\Controllers\Admin\OurWorkDetailController;
use App\Http\Controllers\Admin\ServiceDetailController;
use App\Http\Controllers\Admin\TechnicalSupportController;


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





 

Route::group([ 'as'=>'Admin.', 'middleware'=>'auth' ],function(){

Route::get('/', function () {
    return view('admin.home');
});

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

                  /*   about-us    */
Route::group(['prefix'=> 'about', 'as' => 'about.'],function(){
    Route::get('/',[AboutController::class,'index'])->name('index');
    Route::get('/create',[AboutController::class,'create'])->name('create');
    Route::post('/store',[AboutController::class,'store'])->name('store');
    Route::put('/update/{id}',[AboutController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[AboutController::class,'destroy'])->name('destroy');
});
          /*   about-steps    */
Route::group(['prefix'=> 'aboutstep', 'as' => 'aboutstep.'],function(){
    Route::get('/',[AboutStepController::class,'index'])->name('index');
    Route::get('/create',[AboutStepController::class,'create'])->name('create');
    Route::post('/store',[AboutStepController::class,'store'])->name('store');
    Route::put('/update/{id}',[AboutStepController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[AboutStepController::class,'destroy'])->name('destroy');
});

                  /*   services    */
Route::group(['prefix'=> 'service', 'as' => 'service.'],function(){
    Route::get('/',[ServiceController::class,'index'])->name('index');
    Route::get('/create',[ServiceController::class,'create'])->name('create');
    Route::post('/store',[ServiceController::class,'store'])->name('store');
    Route::put('/update/{id}',[ServiceController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[ServiceController::class,'destroy'])->name('destroy');
});
 
               /*   service-details   */
Route::group(['prefix'=> 'servicedetail', 'as' => 'servicedetail.'],function(){
    Route::get('/',[ServiceDetailController::class,'index'])->name('index');
    Route::get('/create',[ServiceDetailController::class,'create'])->name('create');
    Route::post('/store',[ServiceDetailController::class,'store'])->name('store');
    Route::put('/update/{id}',[ServiceDetailController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[ServiceDetailController::class,'destroy'])->name('destroy');
});

                 /*   blogs   */
Route::group(['prefix'=> 'blog', 'as' => 'blog.'],function(){
    Route::get('/',[BlogController::class,'index'])->name('index');
    Route::get('/create',[BlogController::class,'create'])->name('create');
    Route::post('/store',[BlogController::class,'store'])->name('store');
    Route::put('/update/{id}',[BlogController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[BlogController::class,'destroy'])->name('destroy');
});
                           /*   blog-details  */
Route::group(['prefix'=> 'blogDetail', 'as' => 'blogDetail.'],function(){
    Route::get('/',[BlogDetailController::class,'index'])->name('index');
    Route::get('/create',[BlogDetailController::class,'create'])->name('create');
    Route::post('/store',[BlogDetailController::class,'store'])->name('store');
    Route::put('/update/{id}',[BlogDetailController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[BlogDetailController::class,'destroy'])->name('destroy');
});
                         /*   blog-components  */
Route::group(['prefix'=> 'blogComponent', 'as' => 'blogComponent.'],function(){
    Route::get('/',[BlogComponentController::class,'index'])->name('index');
    Route::get('/create',[BlogComponentController::class,'create'])->name('create');
    Route::post('/store',[BlogComponentController::class,'store'])->name('store');
    Route::put('/update/{id}',[BlogComponentController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[BlogComponentController::class,'destroy'])->name('destroy');
});
                          /*   categories   */
Route::group(['prefix'=> 'category', 'as' => 'category.'],function(){
    Route::get('/',[CategoryController::class,'index'])->name('index');
    Route::get('/create',[CategoryController::class,'create'])->name('create');
    Route::post('/store',[CategoryController::class,'store'])->name('store');
    Route::put('/update/{id}',[CategoryController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[CategoryController::class,'destroy'])->name('destroy');
});
                        /*   our-works   */
Route::group(['prefix'=> 'ourwork', 'as' => 'ourwork.'],function(){
    Route::get('/',[OurWorkController::class,'index'])->name('index');
    Route::get('/create',[OurWorkController::class,'create'])->name('create');
    Route::post('/store',[OurWorkController::class,'store'])->name('store');
    Route::put('/update/{id}',[OurWorkController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[OurWorkController::class,'destroy'])->name('destroy');
});

                        /*   our-works-details  */
Route::group(['prefix'=> 'ourworkdetail', 'as' => 'ourworkdetail.'],function(){
    Route::get('/',[OurWorkDetailController::class,'index'])->name('index');
    Route::get('/create',[OurWorkDetailController::class,'create'])->name('create');
    Route::post('/store',[OurWorkDetailController::class,'store'])->name('store');
    Route::put('/update/{id}',[OurWorkDetailController::class,'update'])->name('update');
    Route::delete('/delete/{id}',[OurWorkDetailController::class,'destroy'])->name('destroy');
});
                      /*   contact   */
Route::group(['prefix'=> 'contact', 'as' => 'contact.'],function(){
    Route::get('/',[ContactController::class,'index'])->name('index');
    Route::put('/delete/{id}',[ContactController::class,'destroy'])->name('destroy');
});

                      /*   technical support  */
Route::group(['prefix'=> 'technicalsupport', 'as' => 'technicalsupport.'],function(){
    Route::get('/',[TechnicalSupportController::class,'index'])->name('index');
    Route::put('/delete/{id}',[TechnicalSupportController::class,'destroy'])->name('destroy');
});
});


