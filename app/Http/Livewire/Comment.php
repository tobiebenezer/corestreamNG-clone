<?php

namespace App\Http\Livewire;

use Corcel\Model\Comment as ModelComment;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    use WithPagination;
    public $post;

    // gettin the data for  the tag and mounting it
    public function mount($post){
        $this->post = $post;
    }

    public function render()
    {
              
        return view('livewire.comment')->with([
            "comments" => ModelComment::where('comment_post_ID',$this->post->ID)
                                ->where('comment_approved', 1)
                                ->where('comment_type','comment')
                                ->paginate(4),
        ]);
    }
}
