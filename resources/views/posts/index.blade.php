<x-layout>
    <x-slot:title>
    Blog posts
    </x-slot>
    <
    <section class="w3l py-sm-5  pt-5">
    <div class="py-5">
    <div class="container py-4">
    @foreach ($posts as $post )
    <div class="card">
  <div class="card-body">
    
    <h5 class="card-title">{{ $post->post_title }}</h5>
<p class="card-text">{!! Str::words($post->post_content,20)  !!}</p>
    <a href="{{route('blog.show',$post)}}" class="btn btn-primary">Read Details</a>
  </div>

</div>
    @endforeach
    </div>
    </div>
    {{$posts->links() }}
    </section>

</x-layout>