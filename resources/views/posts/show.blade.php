<x-layout>
    <x-slot:title>
    Blog posts
    </x-slot>
    <section>
    <div class="card border-info mb-3" style="max-width: 18rem;">
  <div class="card-header">{{$post->title}}</div>
  <div class="card-body">
    
    <p>{{$post->body }}</p>
  </div>
</div>
    </section>
</x-layout>