<x-layout>
    <x-slot:title>
    Blog posts
    </x-slot>
    \
    <section class = "w3l py-sm-5">
    <div class="py-5">
    <div class="container py-5 card border-info mb-3" >
   
  <div class="card-header">{{$post->title}}</div>
  <div class="card-body">
    
    <p>{{ $post->post_content }}</p>
    </div>
   <x-posts.comments :comments="$comments"/>
   
   <livewire:comments-form :type="$type" :post="$post"/>
  </div>

</div>

    </section>
</x-layout>