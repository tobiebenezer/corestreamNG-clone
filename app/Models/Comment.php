<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    const REPLY_TYPE = "reply";
    const COMMENT_TYPE ="comment";

    protected $fillable =[
        'comment_post_ID',
        'comment_author',
        'comment_author_email',
        'comment_content',
        'comment_approved',
        'comment_author_url',
        'comment_author_IP',
        'comment_type',
        'comment_agent',
        'comment_parent',
    ];


    /**
     * The owner of the comment
     * 
     * @return User
     */
    public function author(){
        return $this->belongsToMany(User::class);
    }

    /**
     * The post replied to
     * 
     *@return Post
     */
    public function post(){
        return $this->belongsToMany(Post::class);
    }

    /**
     * Gets all the reply to a comment
     * 
     * @param int $id
     * 
     * @return Comment
     */
    public function replies( $id)
    {
        //get replies the belongs to the same post and has the same parent id

        $replies = Comment::where('comment_type',$this::REPLY_TYPE)->where('comment_parent',$id)->paginate();
        
        return $replies;
    }
}
