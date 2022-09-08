<x-app-layout>
    <x-slot:header>
        Career List
    </x-slot>
    <section class="text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5">
        <div class="container grid-breadcrumb ">
            <h2 class="title-big">Career List</h2>
            
        </div>
    </div>
</section>
    <section class="container">
 <div class="container">
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Job Title</th>
     <th scope="col">Number of position Available </th>
      <th scope="col">Edit</th>
     <th scope="col">Delete</th>
   
    </tr>
  </thead>
  <tbody>
  @foreach ($careers as $index => $career)
      
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$career->job_title}}</td>
     
    <td scope="row" class="text-center"> {{$career->num_available}} </td>
     
         
     
    <td scope="row"><a class="btn btn-primary" href="{{  route('career.edit',$career->id)}}" >Edit</a> </td>
      
      
    <td scope="row">
    <form method="POST" action="{{ route('career.destroy',$career->id) }}">
                            @csrf
                            @method('Delete')
                            <x-nav-link :href="route('career.destroy',$career->id)"
                            class="btn btn-primary"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Delete') }}
                            </x-nav-link>
                        </form>
      </td>
    
    </tr>
  @endforeach

   
  </tbody>
</table>
  
  </div>
  </section>
</x-app-layout>