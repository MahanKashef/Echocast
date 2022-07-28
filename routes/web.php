<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Info;
use App\Test;
use Illuminate\Support\Facades\Route;
use Whoops\Run;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;



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

Route::get('/sign-in',[MainController::class,'sign_in']);

Route::get('/sign-out',[UserController::class,'logout']);

Route::get('/signUp',[UserController::class,'SignUp']);

Route::post('/signUp/store',[UserController::class,'store']);

// Route::resource('/tests' , 'TestController');

Route::get('/products',[TestController::class,'create']);

Route::match(['get','post'],'/products/store',[TestController::class,'store']);

// ****** Main Streams ******* //

Route::get('/',[MainController::class,'index']);

Route::get('/Archive/{title}',[MainController::class,'archive']);

Route::get('/Archives',[MainController::class,'archives']);

Route::get('/About',[MainController::class,'about_us']);

Route::get('/Contact',[MainController::class,'contact_us']);

/*------------------------------ Admin Panel ----------------------------*/

// Route::get('/admin',function(){
//     return view('Together.admin.dashboard.index');
// });

Route::get('/admin',[DashboardController::class,'index']);

// ****** Podcasts ******* //

Route::get('/admin/podcast',[PodcastController::class,'index']);

Route::get('/admin/podcast/create',[PodcastController::class,'create']);

Route::post('/admin/podcast/store',[PodcastController::class, 'store']);

Route::get('/admin/podcast/show/{title}',[PodcastController::class,'show']);

Route::get('/admin/podcast/edit/{id}',[PodcastController::class,'edit']);

Route::match(['get','post'],'/admin/podcast/update/{id}',[PodcastController::class,'update']);

Route::get('/admin/podcast/delete/{id}',[PodcastController::class,'delete']);

// ****** informaions ******* //

Route::get('/admin/info',[InfoController::class,'index']);

Route::get('/admin/info/create',[InfoController::class,'create']);

Route::post('/admin/info/store',[InfoController::class,'store']);

Route::get('/admin/info/edit/{id}',[InfoController::class,'edit']);

Route::match(['get','post'],'/admin/info/update/{id}',[InfoController::class,'update']);

Route::get('/admin/info/delete/{id}',[InfoController::class,'delete']);

// ****** Guests ******* //

Route::get('/admin/guest',[GuestController::class,'index']);

Route::get('/admin/guest/create',[GuestController::class,'create']);

Route::post('/admin/guest/store',[GuestController::class,'store']);

Route::get('/admin/guest/show/{name}',[GuestController::class,'show']);

Route::get('/admin/guest/edit/{id}',[GuestController::class,'edit']);

Route::match(['get','post'],'/admin/guest/update/{id}',[GuestController::class,'update']);

Route::get('/admin/guest/delete/{id}',[GuestController::class,'delete']);

// ****** Users ******* //

Route::get('/admin/user',[UserController::class,'index']);

Route::get('/admin/user/edit/{id}',[UserController::class,'edit']);

Route::match(['get','post'],'/admin/user/update/{id}',[UserController::class,'edit']);

Route::get('/admin/user/permission/{id}',[UserController::class,'permission']);

Route::get('/admin/user/delete/{id}',[UserController::class,'delete']);

Route::get('/admin/user/register',[UserController::class,'register']);

Route::post('/admin/user/store',[UserController::class,'store']);

Route::get('/admin/user/login',[UserController::class,'login']);

Route::post('/sign-in/check',[UserController::class,'check']);

Route::delete('/admin/user/logout',[UserController::class,'logout']);


// ****** Comments ******* //

Route::get('/admin/comment',[CommentController::class,'index']);

Route::get('/admin/comment/show/{id}',[CommentController::class,'show']);

Route::get('/admin/comment/status/{id}',[CommentController::class,'status']);

Route::match(['get','post'],'/comment/store/{id}',[CommentController::class,'store']);

Route::get('/admin/comment/delete/{id}',[CommentController::class,'delete']);

// ****** Menus ******* //

Route::get('/admin/menus/create',[MenuController::class,'create']);

Route::post('/admin/menus/store',[MenuController::class,'store']);

Route::get('/admin/menus/edit/{id}',[MenuController::class,'edit']);

Route::match(['get','post'],'/admin/menus/update/{id}',[MenuController::class,'update']);

Route::get('/admin/menus/delete/{id}',[MenuController::class,'delete']);

// ****** Developers ******* //

Route::get('/admin/dev',[DeveloperController::class,'index']);

Route::get('/admin/dev/create',[DeveloperController::class,'create']);

Route::post('/admin/dev/store',[DeveloperController::class,'store']);

Route::get('/admin/dev/show/{id}',[DeveloperController::class,'show']);

Route::get('/admin/dev/edit/{id}',[DeveloperController::class,'edit']);

Route::match(['get','post'],'/admin/dev/update/{id}',[DeveloperController::class,'update']);

Route::get('/admin/dev/delete/{id}',[DeveloperController::class,'delete']);

// ****** Mail ******* //

 Route::get('/send-mail/{id}',[MailController::class,'mail']);

 Route::get('/admin/check/{verify}',[MailController::class,'check']);




