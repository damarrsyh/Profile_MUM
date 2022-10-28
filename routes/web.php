<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/sign_in', [AuthController::class, 'index']);
Route::get('/sign_up', [AuthController::class, 'sign_up']);
Route::post('/registration', [AuthController::class, 'registration']);
Route::post('/', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
