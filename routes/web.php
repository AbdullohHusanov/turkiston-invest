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

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/clients', [App\Http\Controllers\HomeController::class, 'index'])->name('clients');

Route::get('/simple', [\App\Http\Controllers\SimpleController::class, 'index']);
Route::get('/repost/{slug?}', [\App\Http\Controllers\SimpleController::class,'repost']);
Route::post('/repostFilter', [\App\Http\Controllers\SimpleController::class,'repostFilter'])->name('repost-filter');
Route::get('/blog', [\App\Http\Controllers\SimpleController::class,'blog']);
Route::get('/blog/{slug?}', [\App\Http\Controllers\SimpleController::class,'blogItem']);
Route::get('/forum', [\App\Http\Controllers\SimpleController::class,'forum']);
Route::get('/forum/{slug?}', [\App\Http\Controllers\SimpleController::class,'forumItem']);

Route::get('/{locale?}', [\App\Http\Controllers\MainController::class, 'indexSetLocale']);

Route::get('locale/{locale}', [\App\Http\Controllers\MainController::class, 'indexChangeLocale']);
Route::resource('/blog-comment', \App\Http\Controllers\PostCommentsController::class);

Route::post('/forum-comment', [\App\Http\Controllers\ForumCommentController::class, 'store'])->name('forum-comment');
Route::post('/forum-comment-to-comment', [\App\Http\Controllers\ForumCommentController::class, 'create'])->name('forum-comment-to-comment');

Route::post('/blog-comment/like', [\App\Http\Controllers\PostCommentsController::class, 'like'])->name('blog-comment.like');
Route::post('/blog-comment/dislike', [\App\Http\Controllers\PostCommentsController::class, 'dislike'])->name('blog-comment.dislike');

Route::post('/forum-comment/like', [\App\Http\Controllers\ForumCommentController::class, 'like'])->name('forum-comment-like');
Route::post('/forum-comment/dislike', [\App\Http\Controllers\ForumCommentController::class, 'dislike'])->name('forum-comment-dislike');
