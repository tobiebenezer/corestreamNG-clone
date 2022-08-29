<?php

namespace App\Http\Livewire;

use Corcel\Model\Comment;
use Corcel\Model\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $posts;
    public $type;

    public function mount(Post $id)
    {

        $this->post = $id;
        
        $this->type = 'comment';
    }

    public function render()
    {
        return view('livewire.show',with(
            [
                "comments" => Comment::where('comment_post_ID',$this->post->ID)
                                ->where('comment_approved', 1)
                                ->where('comment_type','comment')
                                ->paginate(4),
            ]
        ))->layout('components.layout',['title'=>'Show Blog']);
    }
}
