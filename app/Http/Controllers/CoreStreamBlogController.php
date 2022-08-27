<?php

namespace App\Http\Controllers;
use Corcel\Model\Post;
use Illuminate\Http\Request;

class CoreStreamBlogController extends Controller
{
    /**
     * show the list of available blog post
     * 
     * @return view post.index
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('posts.index',compact('posts'));
    }

    /**
     * show the post by id
     * 
     * @param Corcel\model\Post id
     * 
     * @return view post.show
     */
    public function show(Post $id)
    {
        $post = $id;

        return view('posts.show',compact('post'));
    }


    
}
