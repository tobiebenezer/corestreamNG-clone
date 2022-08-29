<?php

namespace App\Http\Livewire;

use Corcel\Model\Comment;
use Livewire\Component;

class CommentsForm extends Component
{
    public $comment_author;
    public $comment_content;
    public $comment_email;
    public $post_id;
    public $comment_id;
    public $comment_type;

    protected $listeners = ['commentForm' => 'renderReply'];

    //this return a for and set type to reply
    public function renderReply($type)
    {   $this->comment_type = $type;
        return view('livewire.comments-form');
    }

    //load the data for the live wire
    public function mount($type, $post){
        $this->comment_type = $type;
        $this->post_id = $post->ID;
    }

    //performs the operation or up date comment for approval by the blog admin on wordpress dashboard
    public function updateComment(){
        try {
        
        $comment = new Comment();
        $comment->comment_author = $this->comment_author;
        $comment->comment_author_email =$this->comment_email;
        $comment->comment_author_url = $_SERVER['REQUEST_URI'];
        $comment->comment_author_IP = $_SERVER['REMOTE_ADDR'];
        $comment->comment_content = $this->comment_content;
        $comment->comment_approved = 0;
        $comment->comment_agent =$_SERVER['HTTP_USER_AGENT'] ;
        $comment->comment_type = $this->comment_type;
        $comment->comment_parent = $this->comment_id ?? 0;
        $comment->comment_post_ID = $this->post_id;
        $comment->save(); 
            // making the wire model empty
         $this->comment_author='';
        $this->comment_content='';
        $this->comment_email='';
            //code...
        } catch (\Throwable $th) {
            return view('posts.show');
        }
        
    }

    //this is the default constructor function of the calls component
    public function render()
    {
        return view('livewire.comments-form');
    }
}
