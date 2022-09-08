<<?php

use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\careerController;
use GuzzleHttp\Middleware;
use Illuminate\Foundation\Console\RouteCacheCommand;
use Illuminate\Support\Facades\Route;

Route::group(['middelware'=>['admin']],function(){
   Route::resource('/career', careerController::class)->except('show');
    //show information about application received
   Route::get("/show-applications", [BlogAdminController::class,'showApplications'])->name('show.application');

   //show cv
   Route::get("/show-applications/{id}", [BlogAdminController::class,'showCv'])->name('show.cv');


});

