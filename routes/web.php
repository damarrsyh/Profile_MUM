<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SummaryController;

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

Route::get('/sign_in', [AuthController::class, 'index'])->middleware('guest');
Route::get('/sign_up', [AuthController::class, 'sign_up']);
Route::post('/registration', [AuthController::class, 'registration'])->middleware('guest');
Route::post('/', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/', [HomeController::class, 'index']);

Route::prefix('header')->group(function () {
    Route::get('/index', [HeaderController::class, 'index']);
    Route::get('/create', [HeaderController::class, 'create']);
    Route::post('/store', [HeaderController::class, 'store']);
    Route::get('/edit/{id}', [HeaderController::class, 'edit']);
    Route::post('/update/{id}', [HeaderController::class, 'update']);
});

Route::prefix('summary')->group(function () {
    Route::get('/index', [SummaryController::class, 'index']);
    Route::get('/create', [SummaryController::class, 'create']);
    Route::post('/store', [SummaryController::class, 'store']);
    Route::get('/edit/{id}', [SummaryController::class, 'edit']);
    Route::post('/update/{id}', [SummaryController::class, 'update']);
});

Route::prefix('gallery')->group(function () {
    Route::get('/index', [GalleryController::class, 'index']);
    Route::get('/create', [GalleryController::class, 'create']);
    Route::post('/store', [GalleryController::class, 'store']);
    Route::get('/edit/{id}', [GalleryController::class, 'edit']);
    Route::post('/update/{id}', [GalleryController::class, 'update']);
    Route::post('/destroy/{id}', [GalleryController::class, 'destroy']);
});

Route::prefix('article')->group(function () {
    Route::get('/index/{id}', [ArticleController::class, 'index']);
    Route::get('/aindex', [ArticleController::class, 'aindex']);
    Route::get('/create', [ArticleController::class, 'create']);
    Route::post('/store', [ArticleController::class, 'store']);
    Route::get('/edit/{id}', [ArticleController::class, 'edit']);
    Route::post('/update/{id}', [ArticleController::class, 'update']);
    Route::post('/destroy/{id}', [ArticleController::class, 'destroy']);
});

Route::prefix('news')->group(function () {
    Route::get('/index', [NewsController::class, 'index']);
    Route::get('/aindex', [NewsController::class, 'aindex']);
    Route::get('/create', [NewsController::class, 'create']);
    Route::post('/store', [NewsController::class, 'store']);
    Route::get('/edit/{id}', [NewsController::class, 'edit']);
    Route::post('/update/{id}', [NewsController::class, 'update']);
    Route::post('/destroy/{id}', [NewsController::class, 'destroy']);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/index', [AdminController::class, 'index']);
});


// Route::group(['middleware' => ['auth', 'role:admin,user']], function(){
// });