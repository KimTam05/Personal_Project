<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminAccountController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'loginSubmit'])->name('admin.loginSubmit');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::resource('/admin-user', AdminAccountController::class);
    Route::post('/admin-user/{user}/edit',[AdminAccountController::class, 'update']);
    Route::get('/admin-user/delete/{user}', [AdminAccountController::class, 'destroy']);
    Route::resource('/category', CategoryController::class);
    Route::post('/category/create', [CategoryController::class, 'store']);
    Route::get('category/{category}/delete', [CategoryController::class, 'destroy']);
    Route::resource('/product', ProductController::class);
});
