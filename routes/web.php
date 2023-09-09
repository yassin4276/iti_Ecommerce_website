<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


ROUTE::get('/createproduct',[ProductController::class,'create'])->name('createproduct');
ROUTE::post('/storeproduct',[ProductController::class,'store'])->name('storeproduct');
ROUTE::get("/register",[ProfileController::class,'create'])->name('register');
ROUTE::post('/store',[ProfileController::class,'store'])->name('store');
ROUTE::get('/',[ProfileController::class,'loginform'])->name('loginform');
ROUTE::get('/adminindex',[ProductController::class,'adminindex'])->name('adminindex');
ROUTE::get('/userindex',[ProductController::class,'userindex'])->name('userindex');
ROUTE::get('/index',[ProfileController::class,'login'])->name('login');
ROUTE::delete('/delete/{id}',[ProductController::class,'destroy'])->name('delete');
ROUTE::get('/updateform/{id}',[ProductController::class,'update'])->name('updateform');
ROUTE::put('/editproduct/{id}',[ProductController::class,'edit'])->name('editproduct');
ROUTE::get('/men',[ProductController::class,'men'])->name('menproducts');
ROUTE::get('/women',[ProductController::class,'women'])->name('womenproducts');
ROUTE::get('/search',[ProductController::class,'search'])->name('search');
ROUTE::get('/usermen',[ProductController::class,'usermen'])->name('usermenproducts');
ROUTE::get('/userwomen',[ProductController::class,'userwomen'])->name('userwomenproducts');
ROUTE::get('/usersearch',[ProductController::class,'usersearch'])->name('usersearch');
ROUTE::get('/adminprofile/{id}',[ProfileController::class,'adminprofile'])->name('adminprofile');
ROUTE::get('/adminupdateprofile/{id}',[ProfileController::class,'adminupdateprofile'])->name('adminupdateprofile');
ROUTE::put('/admineditprofile/{id}',[ProfileController::class,'admineditprofile'])->name('admineditprofile');
ROUTE::post('/user/{userid}/product/{productid}',[OrderController::class,'store'])->name('addtocart');
ROUTE::get('/cart',[OrderController::class,'index'])->name('viewcart');
ROUTE::delete('/cart/{id}',[OrderController::class,'destroy'])->name('deleteorder');
ROUTE::get('/userprofile/{id}',[ProfileController::class,'userprofile'])->name('userprofile');
ROUTE::get('/userupdateprofile/{id}',[ProfileController::class,'userupdateprofile'])->name('userupdateprofile');
ROUTE::put('/usereditprofile/{id}',[ProfileController::class,'usereditprofile'])->name('usereditprofile');
ROUTE::get('/logout',[ProfileController::class,'logout'])->name('logout');




