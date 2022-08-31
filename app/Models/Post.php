<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    const PUBLISH = 1;

    protected $fillable =[
        'post_content',
        'post_title',
        'post_author',
        'parent_post',
        'publish'
    ];

    
    /**
     * The owner of the post
     * 
     * @return User
     */
    public function author()
    {
        $this->belongsTo(User::class);
    }

    /**
     * The comment belonging to the post
     * 
     * @return Post
     */
    public function Comment()
    {
        $this->hasMany(User::class);
    }
    

}
