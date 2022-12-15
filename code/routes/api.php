<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/devil', function (Request $request) {
    return sprintf('Hello world. My name is: %s', $request->get('name'));
});

Route::get('/test-env', function (Request $request) {
    return sprintf('Env value is: %s', config('app.test_config_value'));
});
