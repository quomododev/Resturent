<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\API\LoginController;
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

Route::group(['middleware' => 'auth:sanctum'],function(){

    
});

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/list-by-categories/{slug}',[HomeController::class,'listingByCategory'])->name('listing-by.category');

Route::get('/listing-show/{slug}',[HomeController::class,'listingShow'])->name('listing-show');

Route::get('/properties',[HomeController::class,'properties'])->name('properties');
Route::get('/property/{slug}',[HomeController::class,'property'])->name('property');


Route::get('/privacy',[HomeController::class,'privacy'])->name('privacy');
Route::get('/terms_and_conditions',[HomeController::class,'termsAndCondition'])->name('terms-and-condition');

Route::get('/about-us',[HomeController::class,'aboutUs'])->name('about-us');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact-us');
