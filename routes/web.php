<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pusher', function () {
    return view('pusher');
})->name('pusher');

// Route::get('/user/post', function () {
//     return view('pusher');
// });

Route::get('/user/post',  [PostController::class, 'index'])->name('user_post');
Route::post('/user/post_save',  [PostController::class, 'create'])->name('user_post_save');

Route::get('/data',  [PostController::class, 'data'])->name('data');
