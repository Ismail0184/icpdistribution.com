<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Website\CarouselController;
use App\Http\Controllers\Admin\EcommerceCarouselController;



Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

    //Admin/Carousel
    Route::get('/admin/carousel/',[EcommerceCarouselController::class,'index'])->name('carousel');
    Route::get('/admin/carousel/create',[EcommerceCarouselController::class,'create'])->name('carousel.create');
    Route::post('/admin/carousel/store',[EcommerceCarouselController::class,'store'])->name('carousel.store');
    Route::get('/admin/carousel/edit/{id}',[EcommerceCarouselController::class,'edit'])->name('carousel.edit');
    Route::post('/admin/carousel/update/{id}',[EcommerceCarouselController::class,'update'])->name('carousel.update');
    Route::post('/admin/carousel/destroy/{id}',[EcommerceCarouselController::class,'destroy'])->name('carousel.destroy');

    //Admin/Category
    Route::get('/admin/category/',[CategoryController::class,'index'])->name('category');
    Route::get('/admin/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/admin/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::post('/admin/category/destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');

    //Admin/sub-Category
    Route::get('/admin/sub-category/',[SubCategoryController::class,'index'])->name('subCategory');
    Route::get('/admin/sub-category/create',[SubCategoryController::class,'create'])->name('subCategory.create');
    Route::post('/admin/sub-category/store',[SubCategoryController::class,'store'])->name('subCategory.store');
    Route::get('/admin/sub-category/edit/{id}',[SubCategoryController::class,'edit'])->name('subCategory.edit');
    Route::post('/admin/sub-category/update/{id}',[SubCategoryController::class,'update'])->name('subCategory.update');
    Route::post('/admin/sub-category/destroy/{id}',[SubCategoryController::class,'destroy'])->name('subCategory.destroy');
    //Admin/Brand
    Route::get('/admin/brand/',[BrandController::class,'index'])->name('brand');
    Route::get('/admin/brand/create',[BrandController::class,'create'])->name('brand.create');
    Route::post('/admin/brand/store',[BrandController::class,'store'])->name('brand.store');
    Route::get('/admin/brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
    Route::post('/admin/brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
    Route::post('/admin/brand/destroy/{id}',[BrandController::class,'destroy'])->name('brand.destroy');
    //Admin/Unit
    Route::get('/admin/unit/',[UnitController::class,'index'])->name('unit');
    Route::get('/admin/unit/create',[UnitController::class,'create'])->name('unit.create');
    Route::post('/admin/unit/store',[UnitController::class,'store'])->name('unit.store');
    Route::get('/admin/unit/edit/{id}',[UnitController::class,'edit'])->name('unit.edit');
    Route::post('/admin/unit/update/{id}',[UnitController::class,'update'])->name('unit.update');
    Route::post('/admin/unit/destroy/{id}',[UnitController::class,'destroy'])->name('unit.destroy');
    //Admin/Product
    Route::get('/admin/product/get-all-sub-category', [ProductController::class, 'getAllSubCategory'])->name('get-all-sub-category');
    Route::get('/admin/product/',[ProductController::class,'index'])->name('product');
    Route::get('/admin/product/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/admin/product/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::get('/admin/product/show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::post('/admin/product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::post('/admin/product/destroy/{id}',[ProductController::class,'destroy'])->name('product.destroy');
    //Admin/Customer
    Route::get('/admin/customer',[HomeController::class,'dashboard'])->name('customer');
    //Admin/Order
    Route::get('/admin/order',[HomeController::class,'dashboard'])->name('order');


    //admin/website/carousel
    Route::get('admin/website/carousel/',[CarouselController::class,'index'])->name('admin.web.carousel.view');
    Route::get('admin/website/carousel/create',[CarouselController::class,'create'])->name('admin.web.carousel.create');
    Route::post('admin/website/carousel/store',[CarouselController::class,'store'])->name('admin.web.carousel.store');
    Route::get('admin/website/carousel/edit/{id}',[CarouselController::class,'edit'])->name('admin.web.carousel.edit');
    Route::post('admin/website/carousel/update/{id}',[CarouselController::class,'update'])->name('admin.web.carousel.update');
    Route::post('admin/website/carousel/destroy/{id}',[CarouselController::class,'destroy'])->name('admin.web.carousel.destroy');

    //admin/website/about
    Route::get('admin/website/about/',[CarouselController::class,'index'])->name('admin.web.about.view');
    Route::get('admin/website/about/create',[CarouselController::class,'create'])->name('admin.web.about.create');
    Route::post('admin/website/about/store',[CarouselController::class,'store'])->name('admin.web.about.store');
    Route::get('admin/website/about/edit/{id}',[CarouselController::class,'edit'])->name('admin.web.about.edit');
    Route::post('admin/website/about/update/{id}',[CarouselController::class,'update'])->name('admin.web.about.update');
    Route::post('admin/website/about/destroy/{id}',[CarouselController::class,'destroy'])->name('admin.web.about.destroy');

    //admin/website/contact us
    Route::get('admin/website/contact-us/',[CarouselController::class,'index'])->name('admin.web.contactUs.view');
    Route::get('admin/website/contact-us/create',[CarouselController::class,'create'])->name('admin.web.contactUs.create');
    Route::post('admin/website/contact-us/store',[CarouselController::class,'store'])->name('admin.web.contactUs.store');
    Route::get('admin/website/contact-us/edit/{id}',[CarouselController::class,'edit'])->name('admin.web.contactUs.edit');
    Route::post('admin/website/contact-us/update/{id}',[CarouselController::class,'update'])->name('admin.web.contactUs.update');
    Route::post('admin/website/contact-us/destroy/{id}',[CarouselController::class,'destroy'])->name('admin.web.contactUs.destroy');

});
