<?php

use Illuminate\Support\Facades\Route;

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

Illuminate\Support\Facades\Auth::routes([]);

//Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//    \UniSharp\LaravelFilemanager\Lfm::routes();
//});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/clients', [App\Http\Controllers\HomeController::class, 'index'])->name('clients');

Route::get('/simple', [\App\Http\Controllers\SimpleController::class, 'index']);
Route::get('/repost/{slug?}', [\App\Http\Controllers\PageController::class,'repost']);
Route::post('/repost', [\App\Http\Controllers\PageController::class,'repostFilter'])->name('repost');

Route::get('/blog', [\App\Http\Controllers\BlogController::class,'blog']);
Route::get('/blog/{slug?}', [\App\Http\Controllers\BlogController::class,'blogItem']);
Route::post('/blog-comment', [\App\Http\Controllers\BlogController::class, 'storeComment']);
Route::post('/blog-comment/like', [\App\Http\Controllers\BlogController::class, 'like'])->name('blog-comment.like');
Route::post('/blog-comment/dislike', [\App\Http\Controllers\BlogController::class, 'dislike'])->name('blog-comment.dislike');

Route::get('/forum', [\App\Http\Controllers\ForumController::class,'forum']);
Route::get('/forum/{slug?}', [\App\Http\Controllers\ForumController::class,'forumItem']);
Route::get('/add-forum', [\App\Http\Controllers\ForumController::class, 'createForum']);
Route::post('/add-forum', [\App\Http\Controllers\ForumController::class, 'insertForm']);
Route::post('/forum-comment', [\App\Http\Controllers\ForumController::class, 'store'])->name('forum-comment');
Route::post('/forum-comment/like', [\App\Http\Controllers\ForumController::class, 'like'])->name('forum-comment-like');
Route::post('/forum-comment/dislike', [\App\Http\Controllers\ForumController::class, 'dislike'])->name('forum-comment-dislike');

Route::get('/{locale?}', [\App\Http\Controllers\MainController::class, 'indexSetLocale']);
Route::get('locale/{locale}', [\App\Http\Controllers\MainController::class, 'indexChangeLocale']);
