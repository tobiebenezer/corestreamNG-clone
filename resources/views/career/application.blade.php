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
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
     <th scope="col">Email</th>
     <th scope="col">position </th>
     <th scope="col">view CV </th>
   
    </tr>
  </thead>
  <tbody>
  @foreach ($applications as $index => $candidate)
      
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$candidate->name}}</td>
      <td>{{$candidate->phone}}</td>
      <td>{{$candidate->email}}</td>
      <td>{{$candidate->career->job_title}}</td>
    <td scope="row"><a class="btn btn-primary" href="{{  route('show.cv',$candidate->id)}}" >View Cv</a> </td>
    
    </tr>
  @endforeach

   
  </tbody>
</table>
{{ $applications->onEachSide(3)->links() }}
  </div>
  </section>
</x-app-layout>