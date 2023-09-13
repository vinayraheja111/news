<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[adminController::class,'index'])->name('admin');

//users Controllers
Route::get('/admin/users',[UserController::class,'index'])->name('admin.users');
Route::get('/admin/add-user',[UserController::class,'adduser'])->name('admin.add_user');
Route::post('/admin/create-user',[UserController::class,'createuser'])->name('admin.create.user');
Route::get('admin/edit-user/{id}',[UserController::class,'edituser'])->name('admin.edit.user');
Route::post('admin/update-user/{id}',[UserController::class,'updateuser'])->name('admin.update.user');
Route::get('admin/delete-user/{id}',[UserController::class,'deleteuser'])->name('admin.delete.user');

//category Controller
Route::get('/admin/categories',[CategoryController::class,'index'])->name('admin.category');
Route::get('/admin/add-category',[CategoryController::class,'addcategory'])->name('admin.add_category');
Route::post('admin/add-category',[CategoryController::class,'store'])->name('admin.create.category');
Route::get('/admin/edit-catgory/{id}',[CategoryController::class,'editcategory'])->name('admin.edit.category');
Route::post('/admin/update-category/{id}',[CategoryController::class,'updatecategory'])->name('admin.update.category');
Route::get('/admin/delete/category/{id}',[CategoryController::class,'destroy'])->name('admin.delete.category');

//posts controllers
Route::get('admin/posts',[PostController::class,'index'])->name('admin.posts');
Route::get('admin/add-post',[PostController::class,'addpost'])->name('admin.add_post');
Route::post('admin/create-post',[PostController::class,'store'])->name('admin.create.post');
