<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class Blogcontroller extends Controller
{
    /**
     * SHOW ALL THE POST AVAILABLE
     * 
     * @return view
     */
    public function index()
    {   

        
        //get all the post written in pagination
        $posts = Post::where("publish",Post::PUBLISH)->paginate(10);
        if(! $posts) return view('blog.postList')->with(['message'=>['you are yet to have any post']]);
        return view('blog.postList')->with('posts',$posts);
    }

    /**
     *Allow us write a  blog post by return the editor

     *@return view
     */

     public function create(){
         if(auth()->user()->can('create_post')){

             return view('blog.createBlogPost');
         }else{
             return redirect('/blog')->withErrors('You do not have sufficient permission to write a blog post');
         }
     }

     /**
      * this save posts as draft of published
      *
      *@return view
      */
     public function store(Request $request){
         
        $post =new Post();
        
          $post->post_content= $request->body;
            $post->post_title= $request->title;
            $post->post_author = Auth::user()->id;
            $post->parent_post = 0;


        //check for duplicate buy title
        $duplicate = Post::where('post_title',$post->post_title)->first();
        if($duplicate){
            return back()->withErrors('Title exits.')->withInput();
        }

        //make post active
        if($request->has('save')){
           $message = 'post saved successfully';
        }else{
           $post->publish = Post::PUBLISH;
            $message = 'Post published successfully';
        }

        $post->save();
        return redirect("show/$post->id")->withMessage($message);



     }
     
     /**
      * Show post to be edited
      * @param Post $id
      *
      *@return view
      */
      public function edit(Post $post)
      {
         
          //return post to edit view
          if(Auth::user()->can('edit_post')|| Auth::user()->id == $post->id){
            
              return view('blog.edit')->with('post',$post);
          }

          return back()->withMessage('sommthing went wrong try again later');
      }

     /**
      * Update the post and return the post pages
      *
      *@param Post $id
      *@param Request $request
      *@return view
      */
      public function update(Request $request, Post $post)
      {
          //update the field up dated
          if($post->id & Auth::user()->can('edit_post')){
              $update = $post->update([
                'post_content'=>$request->body ?? $post->post_content,
                'post_title'=> $request->title ?? $post->post_title,
                'parent_post' => $request->parent_post ?? $post->parent_post ,
                'publish'=> $request->has('save') ? 1: 0,
              ]);
               
              return redirect('/display-post')->withMessage('Post saved successfully',['post'=>$post]);
          }

          return back()->withErrors('You have no sufficient permissions');
      }

      /**
       * SHOW THE POST 
       * @param Post $post
       * 
       * @return view
       */
      public function show(Post $post)
      {
          //display post in view
          if(! $post) return back()->withErrors('requested page not found');

          return view('blog.show')->with('post',$post);
      }

      /**
       * Delete the post
       * @param post $post
       * 
       * @return view
       */
      public function destroy(Post $post)
      {
          //delete post and return back
          if(!$post) return back()->with('message', 'Post not found');
          if(!Auth::user()->can('delect_post')) return back()->withMessage('You have no sufficient permissions');
          Post::destroy($post->id);

          return redirect('/display-post')->with(['message'=>'post has been deleted']);

      }

      
}
