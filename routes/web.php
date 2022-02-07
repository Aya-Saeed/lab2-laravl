<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\sharedController;
use App\Models\category;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [CategoryController::class, 'list'])->name('categories.list');
Route::get('/create', [CategoryController::class, 'create']);
Route::post('/save', [CategoryController::class, 'save'])->name('categories.save');
Route::delete('/delete/{id}', [CategoryController::class, 'delete']);
route::get('edit/{id}', [CategoryController::class, 'update']);
route::put('edit', [CategoryController::class, 'updateddata']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
//start artice routes
Route::get('/article', [ArticleController::class, 'list'])->name('articles.list');
Route::get('/createarticle', [ArticleController::class, 'create']);
Route::post('/savearticle', [ArticleController::class, 'save'])->name('articles.save');
Route::delete('/deletearticle/{id}', [ArticleController::class, 'delete']);
route::get('editarticle/{id}', [ArticleController::class, 'update']);
route::put('editarticle', [ArticleController::class, 'updateddata']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);
//start 
route::get('/articalecat/{cat_id}/{art_id}', [sharedController::class, 'show']);
