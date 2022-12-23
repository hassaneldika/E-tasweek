<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GetProjectByServiceId;
use App\Http\Controllers\SystemUserController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\UserController;

//get and update about_us.
Route::resource('/aboutus',AboutUsController::class);
//get and update contact_us.
Route::resource('/contactus', ContactUsController::class);
//get,add, and update service.
Route::resource('/service', ServiceController::class);
//get,add,update and delete projects.
Route::resource('/projects', ProjectController::class);
//search of projects
Route::get('/searchproject', [SearchController::class, "searchProjects"]);

Route::resource('/systemuser', SystemUserController::class);
Route::resource('/media', MediaController::class);
Route::resource('/offers', OfferController::class);
Route::resource('/getProjectById',GetProjectByServiceId::class);

//Route::get('/getProjectById/{id}',[GetProjectByServiceId::class,'show']);


Route::group(['middleware'=>['auth:sanctum']], function () {
});



// Public routes
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/forgetpassword', [ForgetController::class, 'ForgetPassword']);
Route::post('/resetpassword', [ResetController::class, 'ResetPassword']);
Route::get('/user', [UserController::class, 'User'])->middleware('auth:api');


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});