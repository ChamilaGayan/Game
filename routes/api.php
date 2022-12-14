<?php

use App\Http\Controllers\Api\UserController;
use App\Models\Post;
use App\Http\Controllers\PostsApiController;
use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('posts', PostsApiController::class);
Route::resource('accessories', AccessoryController::class);
Route::resource('games', GameController::class);
Route::resource('players', PlayerController::class);



// Route::get('/posts', [PostsApiController::class, 'index']);
// Route::post('/posts', [PostsApiController::class, 'store']);
// Route::put('/posts/{post}', [PostsApiController::class, 'update']);
// Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
Route::post('login', [App\Http\Controllers\Api\UserController::class, 'login']);
Route::post('user-register', [App\Http\Controllers\Api\UserController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('user-details', [UserController::class, 'userDetails']);
});
