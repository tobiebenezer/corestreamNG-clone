@can('create_post')
  
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="btn nav-link active" aria-current="page" href="#"></a>
  </li>
  <li class="nav-item">
    <a class="btn nav-link" href="{{route('display-post')}}">View Post</a>
  </li>
  <li class="nav-item">
    <a class="btn nav-link" href="{{route('create')}}">Create Post</a>
  </li>
  @can('approve_post')
    
  <li class="nav-item">
    <a class="btn nav-link disabled" href="{{route('unapproved_post')}}">View Unapproved Post</a>
  </li>
  @endcan
</ul>
@endcan