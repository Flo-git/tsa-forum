<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();
/*Auth::routes(['register' => false]);*/

/*Route::get('/', [HomeController::class,'index'])->name('home');*/
Route::get('/', [FrontController::class,'index'])->name('home');
Route::get('/article/{slug}', [FrontController::class,'show'])->name('front.posts.show');
Route::get('/tag/{slug}', [TagController::class,'show'])->name('front.tags.show');

Route::prefix('admin')->group(function(){
    Route::resource('posts', PostController::class);
});


/*Route::get('/user', [UserController::class, 'index']);*/
