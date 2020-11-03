

<!-- // use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });  -->

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::get('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::get('user-profile', 'AuthController@userProfile');
});