<?php

use App\Http\Controllers\Front\AuthController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




    Auth::routes();
 
Route::get('lang/{lang}',function ($lang){

    App::setLocale($lang);
    session()->put('lang', $lang);
    return redirect()->back();
})->middleware('changelang')->name('lang');
       


Route::group([ 'as'=>'Front.' ],function(){
    Route::get('/',[FrontController::class,'index'])->name('index');
    Route::get('/about',[FrontController::class,'about'])->name('about');
    Route::get('/blog',[FrontController::class,'blog'])->name('blog');
    Route::get('/blog/details/{id}',[FrontController::class,'blogDetails'])->name('blog.details');
    Route::get('/contactus',[FrontController::class,'contactUs'])->name('contactus');
    Route::post('/contactus/store',[FrontController::class,'storeContactUs'])->name('storecontactus');
    Route::get('/ourworks',[FrontController::class,'ourWorks'])->name('ourworks');
    Route::get('/ourworks/details/{id}',[FrontController::class,'ourWorksDetails'])->name('ourworks.details');
    Route::get('/services',[FrontController::class,'services'])->name('services');
    Route::get('/my-services/{id}',[FrontController::class,'myServices'])->name('my-services');
    Route::get('/services/details/{id}',[FrontController::class,'serviceDetails'])->name('services-details');
    Route::get('/service/request',[FrontController::class,'serviceRequest'])->name('service.request');
    Route::post('/service/request',[FrontController::class,'serviceRequestStore'])->name('service.requeststore');
    Route::get('/service/request/details',[FrontController::class,'serviceRequestDetails'])->name('service.request.details');
    Route::get('/technicalsupport/register',[FrontController::class,'technicalSupportRegister'])->name('technicalsupport.register');
    Route::get('/technicalsupport/login',[FrontController::class,'technicalSupportLogin'])->name('technicalsupport.login');
    Route::post('/myservices/client-comment',[FrontController::class,'clientComment'])->name('clientcomment');
    Route::put('/myservices/comment-reply/{id}',[FrontController::class,'commentReply'])->name('commentreply');
    Route::get('/client/contact',[FrontController::class,'clientConatct'])->name('clientcontact');
    Route::post('/client/contact/store',[FrontController::class,'clientConatctStore'])->name('clientcontactstore');
});
  Route::post('/client-register',[AuthController::class,'register'])->name('client-register');
  Route::post('/client-login',[AuthController::class,'login'])->name('client-login');
  Route::post('/client-logout',[AuthController::class,'logout'])->name('client-logout');


