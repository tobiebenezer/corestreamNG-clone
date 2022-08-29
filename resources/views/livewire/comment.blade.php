<div>
<div class="container mb-5 mt-5">
			  
              <div class="card">
                 <div class="row">
                     <div class="col-md-12">
                         <h3 class="text-center mb-5">
                            COMMENTS
                         </h3>
                         @foreach ($comments as $comment )
                         <div class="col-md-12">
                             
                         <div class="row">
                             <div class="col-md-12">
                                 <div class="media">
                                     <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="https://i.imgur.com/stD0Q19.jpg" />
                                     <div class="media-body">
                                         <div class="row">
                                          <div class="col-8 d-flex">
                                             <h5>{{$comment->comment_author}}</h5>
                                             <span>- {{ round(abs((strtotime(date('d-m-y h:i:s')) - strtotime($comment->comment_date))% 86400)) }} hours ago </span>
                                         {{ $comment->comment_content }}
                                          </div>
                                          
                                          <div class="col-4">
                                          

                                         <span wire:click="$emitTo('ShowRely','show',$comment->comment_ID)"><i class="fa fa-reply"></i><a href="">Read reply</a></span>
                                       
                                          <div class="pull-right reply">
                                          
                                         <span><i wire:click ="$emitTo('CommentsForm','commentForm', $type='reply')" class="fa fa-reply"></i> <a href="">reply</a> </span>
                                          
                                          </div>
                                          <!-- form for reply -->
                                          </div>
                                         </div>
                                         </div>	
                                        </div>	
                                         </div>
                                     </div>
                                 </div>
                    @endforeach
                 </div>
            </div>
    </div>
</div>
</div>
