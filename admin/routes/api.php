<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all-category',[APIController::class,'getAllCategory']);
Route::get('/all-sub-category',[APIController::class,'getAllSubCategory']);

Route::get('/all-products',[APIController::class,'getAllProducts']);
Route::get('/all-category-product/{id}',[APIController::class,'getCategoryProduct']);

Route::get('/carousel',[APIController::class,'getCarousel']);
Route::get('/carousel-active',[APIController::class,'getCarouselActive']);
Route::get('/carousel-ecommerce',[APIController::class,'getCarouselEcommerce']);
Route::get('/trending-products',[APIController::class,'getTrendingProducts']);

Route::get('/website/blogs',[APIController::class,'getBlogs']);
Route::get('/website/business-partner',[APIController::class,'getBusinessPartner']);
Route::get('/website/business-partner-single/{id}',[APIController::class,'getBusinessPartnerSingle']);

Route::get('/contact',[APIController::class,'getContact']);
Route::get('/social-media',[APIController::class,'getSocialMedia']);
