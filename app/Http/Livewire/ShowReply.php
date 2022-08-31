<?php

namespace App\Http\Livewire;

use Corcel\Model\Comment;
use Livewire\Component;
use Livewire\WithPagination;

class ShowReply extends Component
{   
    use WithPagination;

    protected $listeners = ['show'=>'render'];
    
    
    protected $comments ;

    public function mount(Comment $comment)
    {
        $this->comments = Comment::where('comment_parent',$comment->id)
                                    ->where('comment_type','reply')
                                    ->paginate(10);
    }

    public function render()
    {
        return <<<'blade'
        @foreach($this->comments as $reply)
        <div class="media mt-4">
        
             <a class="pr-3" href="#"><img class="rounded-circle" alt="Bootstrap Media Another Preview" src="{{ asset('img/user(1).png) }}" /></a>
            <div class="media-body">
                    
                <div class="row">
         <div class="col-12 d-flex">
            <h5>{{$reply->comment_author}}</h5>
            <span>- - {{ round(abs((strtotime(date('d-m-y h:i:s')) - strtotime($comment->comment_date))% 86400)/3600) }} hours ago </span>
         </div>
         
        
        </div>

               {{$reply->comment_content}}
            </div>
        </div>
        @endforeach
        
        blade;
    }
}
