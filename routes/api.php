<?php

use Illuminate\Http\Request;

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

// 部份符合
Route::middleware(['auth:api','scope:profile,test'])->
get('/profile_scope', function (Request $request) {
    return $request->user();
});

// 全部符合
Route::middleware(['auth:api','scopes:profile,test'])->
get('/profile_scopes', function (Request $request) {
    return $request->user();
});