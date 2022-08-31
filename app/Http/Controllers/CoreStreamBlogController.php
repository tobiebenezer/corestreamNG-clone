<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

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
     * @param Http\model\Post id
     * 
     * @return view post.show
     */
    public function show(Post $id)
    {
        $post = $id;
        $comments =  Comment::where('comment_post_ID',$post->ID)
                                ->where('comment_approved', 1)
                                ->where('comment_type','comment')
                                ->paginate(4);
        $type = 'comment';
        return view('posts.show',compact('post','comments','type'));
    }


    
}
