<?php

use App\Http\Controllers\Blogcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['can:create_post']], function () {
    //show post belonging to a writer
    Route::get('/display-post',[Blogcontroller::class,'index'])->name('create');
    
    //show new post form
    Route::get('/write-post',[Blogcontroller::class,'create'])->name('create');
    //save new post
    Route::post('/store-post',[Blogcontroller::class,'store'])->name('store');
    //show post create
    Route::get('/show/{post}',[Blogcontroller::class,'show'])->name('show');
    //update edited post
    Route::post('/update/{post}',[Blogcontroller::class,'update'])->name('update');
});

//Delete post
Route::get('/delete/{post}',[Blogcontroller::class,'destroy'])->name('delete')->middleware('can:delete_post');

//Edit post
Route::get('/edit-post/{post}',[Blogcontroller::class,'edit'])->middleware('can:edit_post')->name('edit-post');

//Approve post
Route::get('/approve/{post}',[Blogcontroller::class,'approve'])->middleware('can:approve_post')->name('approve');



// Permission::create(['name' => 'edit_post']);
// Permission::create(['name' => 'create_post']);
// Permission::create(['name' => 'delete_post']);
// Permission::create(['name' => 'approve_post']);
// Permission::create(['name' => 'disapprove_post']);
