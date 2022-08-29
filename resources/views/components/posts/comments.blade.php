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
                                          <div class="col-8 d-flex rounded">
                                             <h5>{{$comment->comment_author}}</h5>
                                             <span>- {{ round(abs(((strtotime(date('d-m-y h:i:s')) - strtotime($comment->comment_date))% 86400)/3600)) }} hours ago </span>
                                         {{ $comment->comment_content }}
                                          </div>
                                          
                                          <div class="col-3">
                                          

                                         <a href=""><span wire:click="$emit('show',$comment->comment_ID)"><i class="fa fa-reply"></i>view reply</span></a>
                                       
                                          <div class="pull-right reply">
                                          
                                         <a href="#"><span><i class="fa fa-reply"></i> reply</span></a>
                                          
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
</div>

