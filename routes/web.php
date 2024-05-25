<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsarticleController;
use App\Http\Controllers\BlogController;

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
Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'adminDestroy'])->name('admin.logout');
    Route::resource('categories',CategoryController::class);
    Route::resource('newsarticle',NewsarticleController::class);
    Route::resource('comments',CommentController::class);
    Route::get('/newsarticle/categories/{id}',[NewsarticleController::class,'browse'])->name('newsarticle.browse');
    Route::get('/newsarticle/article/{id}',[NewsarticleController::class,'article'])->name('newsarticle.article');
    

});
Route::get('/', function () {
    return view('frontend.index');
})->name('frontend.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
