<x-layout>
    <x-slot:title>
    Blog posts
    </x-slot>
    
    <section class = "w3l py-sm-5">
    <div class="py-5">
    <div class="container py-5 card border-info mb-3" >
   
  <div class="text-center card-header"><h1>{{$post->post_title}}</h1></div>
  <div class="card-body">
  <img class="img-responsive" title="images (23).jpeg" src="/storage/upload/blobid1662030153447.jpg" alt="ui" width="553" height="415">
    
    <p>{!! $post->post_content !!}</p>
    </div>
   <x-posts.comments :comments="$comments"/>
   
   <livewire:comments-form :type="$type" :post="$post"/>
  </div>

</div>

    </section>
</x-layout>