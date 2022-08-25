<x-layout>
    <x-slot:title>
    Blog posts
    </x-slot>
    <section>
    <div class="container py-4">
    @foreach ($posts as $post )
    <div class="card">
  <div class="card-body">
    
    <h5 class="card-title">{{ $post->title }}</h5>
<p class="card-text">{{ Str::words($post->body,20)  }}</p>
    <a href="{{route('blog.show',$post->id)}}" class="btn btn-primary">Read Details</a>
  </div>

</div>
    @endforeach
    </div>
    </section>
</x-layout>