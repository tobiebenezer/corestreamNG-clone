<div>
<style>
img{
    width: fit-content;
    
}
</style>
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
                                     <img style="height:1.5rem; width:auto;" class="mr-20 w-20 h-20 rounded-circle" alt="Bootstrap Media Preview" src="{{ asset('img/user(1).png') }}" />
                                     <div class="media-body">
                                         <div class="row">
                                          <div class="col-8 d-flex">
                                             <h5 class="mr-3">{{$comment->comment_author}}</h5>
                                             <span class="mr-3">- {{ $comment->comment_date->diffForHumans() }}  ago </span>
                                         {{ $comment->comment_content }}
                                          </div>
                                          
                                          <div class="col-4">
                                          

                                         <!-- <span ><i class="btn fa fa-reply"  wire:click = "$toggle('reply')">Read reply</i></span>
                                       
                                          <div class="pull-right reply">
                                          
                                         <span><i wire:click ="$toggle('form)" class="fa fa-reply btn">reply</i>  </span> -->
                                          
                                          </div>
                                          <!-- form for reply -->
                                          </div>
                                         </div>
                                         </div>	
                                        </div>	
                                            
                                        <livewire:show-reply :comments ="$comment->ID"/>
                                        @if ($reply)
                                        @endif
                                        
                                        @if ($form)
                                        {{ $form }}
                                        <livewire:comments-form :type="$type" :post="$post"/>   
                                        @endif
                                        
                                       
                                         </div>
                                     </div>
                    @endforeach
                                 </div>
                 </div>
            </div>
    </div>
</div>
</div>
