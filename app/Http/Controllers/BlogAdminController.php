<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Corcel\Laravel\Auth\AuthUserProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

      /**
       * Approve the a post
       * 
       * 
       */
      public function displayUnapproved()
      {
          
          if(!Auth::user()->can('approve_post')) return redirect('/blog');
          
          $posts= Post::where('publish',0)->paginate(15);
          return view('blog.postList',compact('posts'));
      }
}
