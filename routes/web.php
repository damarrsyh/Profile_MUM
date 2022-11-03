<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckRole;
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

Route::prefix('article')->group(function(){
    Route::get('/index', [ArticleController::class, 'index']);
    Route::get('/create', [ArticleController::class, 'create']);
    Route::post('/store', [ArticleController::class, 'store']);
    Route::get('/edit', [ArticleController::class, 'edit']);
    Route::post('/update', [ArticleController::class, 'update']);
    Route::get('/destroy', [ArticleController::class, 'destroy']);
});

Route::prefix('news')->group(function(){
    Route::get('/index', [NewsController::class, 'index']);
    Route::get('/create', [NewsController::class, 'create']);
    Route::post('/store', [NewsController::class, 'store']);
    Route::get('/edit', [NewsController::class, 'edit']);
    Route::post('/update', [NewsController::class, 'update']);
    Route::get('/destroy', [NewsController::class, 'destroy']);
});

Route::prefix('header')->group(function(){
    Route::get('/edit', [HeaderController::class, 'edit']);
    Route::post('/update', [HeaderController::class, 'update']);
});

Route::prefix('gallery')->group(function(){
    Route::get('/create', [GalleryController::class, 'create']);
    Route::post('/store', [GalleryController::class, 'store']);
    Route::get('/edit', [GalleryController::class, 'edit']);
    Route::post('/update', [GalleryController::class, 'update']);
});

Route::prefix('summary')->group(function(){
    Route::get('/create', [SummaryController::class, 'create']);
    Route::post('/store', [SummaryController::class, 'store']);
    Route::get('/edit', [SummaryController::class, 'edit']);
    Route::post('/update', [SummaryController::class, 'update']);

});


// Route::group(['middleware' => ['auth', 'role:admin,user']], function(){
// });