<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    //
    /**
       * Approve the a post
       * 
       * 
       */
      public function approve(Post $post)
      {
          if(Auth::user()->can('approve_post'))
          {
              $post->update([
                  'publish'=> 1,
              ]);

              return back()->with(['message'=>'post approved']);
          }
      }
}
