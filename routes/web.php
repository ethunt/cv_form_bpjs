<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AllAjaxController;


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

// Auth::routes();

// Route::get('profile', function () {
//     return view('formcv');
// });
// Route::get('api/profile', [\App\Http\Controllers\api\ProfileController::class, 'index']);
// Route::get('profile', 'ProfileController@getProfile');
Route::get('/profile/filtercity', [\App\Http\Controllers\AllAjaxController::class, 'filterCity']);
