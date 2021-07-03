<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


/**************** Auth ****************/

Auth::routes();

/*********** ViewController ************/

Route::get('/', [
    ViewController::class, 'index'
])->name('index');

Route::get('/allProduct', [
    ViewController::class, 'allProduct'
])->name('allProduct');

Route::get('/categories', [
    ViewController::class, 'categories'
])->name('categories');

Route::get('/Cart', [
    ViewController::class, 'Cart'
])->name('Cart');

Route::get('/adminPanel', [
    ViewController::class, 'adminPanel'
])->name('adminPanel');


/******* CategoriesController *********/

Route::get('/{id}', [
    CategoriesController::class, 'selectedCategories'
])->name('selectedCategories');


/******* ProductController *********/

Route::post('/adminPanel/addTovar', [
    ProductController::class, 'addProduct'
])->name('addProduct');
Route::get('/product/{id}', [
    ProductController::class, 'moreProduct'
])->name('more-details');

Route::get('/one-product/edit/{id}', [
    ProductController::class, 'editProduct'
])->name('edit-product');

Route::post('/one-product/editComplite/{id}', [
    ProductController::class, 'editProductComplite'
])->name('edit-product-complite');

Route::get('/one-product/deleteProduct/{id}', [
    ProductController::class, 'deleteProduct'
])->name('delete-product');


/******* CartController *********/

Route::get('/Cart/{id}', [
    CartController::class, 'AddInCart'
])->name('Add-In-Cart');

Route::get('/Cart/buy/{id}', [
    CartController::class, 'buyProductCart'
])->name('buy-product-cart');

Route::get('/Cart/deleteProductCart/{id}', [
    CartController::class, 'deleteProductCart'
])->name('delete-product-cart');

