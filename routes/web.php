<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoreStream;
use App\Http\Controllers\CoreStreamBlogController;
use Illuminate\Foundation\Console\RouteCacheCommand;

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

Route::get('/home',[CoreStream::class,'index'])->name('home');
Route::get('/about',[CoreStream::class,'about'])->name('about');
Route::get('/services',[CoreStream::class,'services'])->name('services');
Route::get('/contact',[CoreStream::class,'contact'])->name('contact');
Route::post('/subscribe',[CoreStream::class,'subscription'])->name('subscribe');
Route::get('/message',[CoreStream::class,'message'])->name('message');

//blog

Route::get('/blog',[CoreStreamBlogController::class,'index'])->name('blog.index');
Route::get('/blog/{id}',[CoreStreamBlogController::class,'show'])->name('blog.show');

