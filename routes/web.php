<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoreStream;
use App\Http\Controllers\CoreStreamBlogController;
use App\Http\Livewire\Show;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[CoreStream::class,'index'])->name('home');
Route::get('/about',[CoreStream::class,'about'])->name('about');
Route::get('/services',[CoreStream::class,'services'])->name('services');
Route::get('/contact',[CoreStream::class,'contact'])->name('contact');
Route::post('/subscribe',[CoreStream::class,'subscription'])->name('subscribe');
Route::get('/message',[CoreStream::class,'message'])->name('message');
Route::get('/project',[CoreStream::class,'project'])->name('project');
Route::get('/software',[CoreStream::class,'software'])->name('software');
Route::get('/survellance',[CoreStream::class,'survellance'])->name('survellance');
Route::get('/vacancy',[CoreStream::class,'vacancy'])->name('vacancy');
Route::post('/application',[CoreStream::class,'submitApplication'])->name('application');
//blog

Route::get('/blog',[CoreStreamBlogController::class,'index'])->name('blog.index');

Route::get('/blog/{id}',[CoreStreamBlogController::class,'show'])->name('blog.show');

//blog permission middle were
$files = glob(base_path('routes/blog/*.php'),GLOB_BRACE);
foreach($files as $file) require $file;

