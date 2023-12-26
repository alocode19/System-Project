<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChannelController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\AnnouncementController;


/*
|-------------------------------------------------------------------------- 
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//Public APIs
    Route::post('/login',[AuthController::class,'login'])->name('user.login');
    Route::post('/user', [UserController::class,'store'])->name('user.store');



 
//Private APIs  

 Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);


    //UserController APIs
    Route::controller(UserController::class)->group(function (){
        Route::get('/user',                 'index');
        Route::get('/user/{id}',            'show');
        Route::put('/user/{id}',            'update')->name('user.update');
        Route::put('/user/email/{id}',      'email')->name('user.email');
        Route::put('/user/password/{id}',   'password')->name('user.password');
        Route::put('/user/image/{id}',      'image')->name('user.image');
        Route::delete('/user/{id}',         'destroy');
    });

    //Announcement APIs
    Route::controller(AnnouncementController::class)->group(function (){
        Route::get('/announcement',             'index');       //Get all Announcement
        Route::get('/announcement/{id}',        'show');        //Get a specific Announcement
        Route::post('/announcement',            'store');       //Create an Announcement
        Route::put('/announcement/{id}',        'update');      //Update an announcement
        Route::delete('/announcement/{id}',     'destroy');     // Delete an Announcement
    });

    //Channel APIs
    Route::controller(ChannelController::class)->group(function (){
        Route::get('/channel',             'index');
        Route::get('/channel/{id}',        'show');
        Route::post('/channel',            'store');
        Route::put('/channel/{id}',        'update');
        Route::delete('/channel/{id}',     'destroy');
    }); 

//User Specific API
    Route::get('/profile/show',            [ProfileController::class, 'show']);
    Route::put('/profile/image',            [ProfileController::class, 'image'])->name('profile.image');
 });
  