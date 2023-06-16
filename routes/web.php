<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//SITE ROUTES
Route::get('/', [SiteController::class, 'viewHomepage']);
Route::get('/publicacoes', [SiteController::class, 'publicacoesPage']);
Route::get('/login-page', [SiteController::class, 'loginPage']);
//USER ROUTES
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/register', [UserController::class, 'register']);
//POSTS ROUTES
Route::post('/new-publication', [PostController::class, 'newPublication']);
Route::post('/delete-publication', [PostController::class, 'deletePublication']);