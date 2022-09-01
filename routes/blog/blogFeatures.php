<?php

use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\Blogcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['can:create_post']], function () {
    //show post belonging to a writer
    Route::get('/display-post',[Blogcontroller::class,'index'])->name('display-post');
    
    //show new post form
    Route::get('/write-post',[Blogcontroller::class,'create'])->name('create');
    //save new post
    Route::post('/store-post',[Blogcontroller::class,'store'])->name('store');
    //show post create
    Route::get('/show/{post}',[Blogcontroller::class,'show'])->name('show');
    //update edited post
    Route::post('/update/{post}',[Blogcontroller::class,'update'])->name('update');
    //upload and store img in storage
});
Route::post('/upload',[Blogcontroller::class,'upload'])->name('upload');

//Delete post
Route::get('/delete/{post}',[Blogcontroller::class,'destroy'])->name('delete')->middleware('can:delete_post');

//Edit post
Route::get('/edit-post/{post}',[Blogcontroller::class,'edit'])->middleware('can:edit_post')->name('edit-post');

//Approve post
Route::group(['middleware'=>'can:approve_post'],function(){

    Route::get('/approve/{post}',[BlogAdminController::class,'approve'])->name('approve');

    //display all unapproved post
    Route::get('/unapproved-post',[BlogAdminController::class,'displayUnapproved'])->name('unapproved_post');
});



// Permission::create(['name' => 'edit_post']);
// Permission::create(['name' => 'create_post']);
// Permission::create(['name' => 'delete_post']);
// Permission::create(['name' => 'approve_post']);
// Permission::create(['name' => 'disapprove_post']);
