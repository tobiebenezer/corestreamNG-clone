<x-layout>
    <x-slot:title>
        15 days messages
    </x-slot>
    <section class="container py-5">
 <div class="container py-5">
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($subscribers as $index => $message)
      
    <tr>
      <th scope="row">{{$index + 1}}</th>
      <td>{{$message->name}}</td>
      <td>{{ $message->email }}</td>
      <td>{{$message->message}}</td>
    </tr>
  @endforeach

   
  </tbody>
</table>
  {{ $subscribers->onEachSide(3)->links() }}
  </div>
  </section>
</x-layout>