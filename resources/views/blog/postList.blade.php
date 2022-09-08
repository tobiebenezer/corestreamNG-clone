<x-app-layout>
    <x-slot:header>
        Post List
    </x-slot>
    <section class="text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5">
        <div class="container grid-breadcrumb ">
            <h2 class="title-big">Post List</h2>
            
        </div>
    </div>
</section>
    <section class="container">
 <div class="container">
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
     @can('approve_post')
     <th scope="col">Approve</th>
     @endcan 
         
      @can('edit_post')
      <th scope="col">Edit</th>
      @endcan
      
     @can('delete_post')
     <th scope="col">Delete</th>
     @endcan 
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $index => $post)
      
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$post->post_title}}</td>
      @can('approve_post')
     <td scope="row"> <a class="btn btn-primary" href="{{route('approve',$post->id)}}">Approve</a> </td>
     @endcan 
         
      @can('edit_post')
      <td scope="row"><a class="btn btn-primary" href="{{route('edit-post',$post->id)}}">Edit</a> </td>
      @endcan
      
     @can('delete_post')
     <td scope="row"><a class="btn btn-primary" href="{{route('delete',$post->id)}}">Delete</a> </td>
     @endcan 
    </tr>
  @endforeach

   
  </tbody>
</table>
  {{ $posts->onEachSide(3)->links() }}
  </div>
  </section>
</x-app-layout>