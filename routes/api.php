<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProfileController;
use App\Http\Controllers\api\PhotoController;
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

Route::group(['middleware' => ['web']], function () {
    //Profile api
    Route::get('profile', [ProfileController::class, 'index']);
    Route::get('profile/{profile}', [ProfileController::class, 'showProfile']);
    Route::post('profile', [ProfileController::class, 'createProfile']);
    Route::put('profile/{profile}', [ProfileController::class, 'updateProfile']);
    //Photo api
    Route::put('photo/{photo}', [PhotoController::class, 'uploadPhoto']);
    Route::get('photo/{photo}', [PhotoController::class, 'downloadPhoto']);
    Route::get('photo/{photo}', [PhotoController::class, 'deletePhoto']);
    //Working-experience api
    Route::get('working-experience/{profile}', [ProfileController::class, 'workingExperience']);
    Route::put('working-experience/{profile}', [ProfileController::class, 'updateExperience']);

});
// Route::get('profile/filtercity', [ProfileController::class, 'filterCity']);
