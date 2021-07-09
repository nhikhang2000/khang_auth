<?php

use App\Http\Controllers\auth\api\CompaniesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\api\AuthController;

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

/**
 * ban đầu khi user login vào hệ thống thì sẽ sinh ra toke
 * token này có nhiệm vụ là xác thực người dùng đó
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('companies',[CompaniesController::class,'index']);
Route::post('companies',[CompaniesController::class,'store']);
Route::put('companies/{id}',[CompaniesController::class,'update']);

// Route::post('auth/register',[AuthController::class, 'register']);

Route::prefix('/user')->group(function(){
    Route::post('/login',[AuthController::class,'login']);
});

Route::prefix('/user1')->group(function(){
    Route::post('/login',[AuthController::class,'login']);
});

//thì chỉ cần truyền token đó vô đây chạy là được
Route::middleware('auth:api')->get('/user1', function (Request $request) {
    return $request->user();
});
