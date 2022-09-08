<x-app-layout>
    <x-slot:header>
        CV
    </x-slot>
    <section class="text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-sm-5">
        <div class="container grid-breadcrumb ">
            <h2 class="title-big">CV</h2>
            
        </div>
    </div>
</section>
    <section class="container">
 <div class="container">
  <div class="row justify-content-center">
@if ($url->path_to_cv)

  <iframe src="{{asset($url->path_to_cv
  )}}" frameborder = "0" style="overflow:hidden; overflow-x:hidden; overflow-y:hidden; height : 150%; width:100%; position:absolute; top:70px; left:0px; right:0px;bottom:0px" height="150%" width="150" >
  This browser does no support PDFs. Please the PDF to view it: <a href="{{asset($url)}}">Download PDF</a>
  </iframe>

    
@endif

  </div>
  
  </div>
  </section>
</x-app-layout>