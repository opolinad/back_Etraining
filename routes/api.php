<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/courses', [CourseController::class,'index']);
Route::get('/courses', 'App\Http\Controllers\CourseController@index');
Route::post('/courses', 'App\Http\Controllers\CourseController@store');
Route::put('/courses/{id}', 'App\Http\Controllers\CourseController@update');
Route::delete('/courses/{id}', 'App\Http\Controllers\CourseController@destroy');