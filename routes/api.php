<?php

use Illuminate\Http\Request;
use App\Permit;

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

Route::middleware('api')->get('/test', function (Request $request) {
    $permit = App\Permit::all();
    return $permit->toJson();
});

Route::middleware('api')->get('/info', function (Request $request) {
    return phpinfo();
});