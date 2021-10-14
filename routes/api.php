
<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth:api')->get('user', [UserController::class,'user']);
/*Route::middleware('auth:api')->get('user','Api\UserController@user');*/

Route::middleware('api')->get('articles/{post}', [PostController::class,'getComments']);
/*Route::middleware('api')->get('articles/{post}', 'Api\PostController@getComments');*/

Route::middleware('auth:api')->post('comments/create', [CommentController::class,'create']);
/*Route::middleware('auth:api')->post('comments/create','Api\CommentController@create');*/

