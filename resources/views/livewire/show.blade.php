<div>
<section class = "p-5">
    <div class="py-5">
    <div class="container py-5 card border-info mb-3" >
   
  <div class="card-header">{{$post->title}}</div>
  <div class="card-body">
    
    <p>{!! $post->post_content !!}</p>
    </div>
   <livewire:comment :post="$post"/>
   
   <livewire:comments-form :type="$type" :post="$post"/>
  </div>

</div>
</section>
</div>
