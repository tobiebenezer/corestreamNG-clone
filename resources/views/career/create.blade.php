<x-app-layout>
    <x-slot:header>
        Career 
    </x-slot>
    <!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 ">
        <x-admin-nav/>
        <div class="container grid-breadcrumb ">
        <h2 class="title-big">Create Career</h2>
            
        </div>
    </div>
</section>
<section class="">
<div class=" w3l-follow-social py-5">
<div class="container ">
<form class="form" action="/career" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

<input required="required" value="{{ $career->job_title?? ''}}" placeholder="{{$career->job_title ?? 'Enter title here'}}" type="text" name = "job_title"class="form-control" />

</div>
<div class="form-group">

<input required="required" value="{{ $career->num_available ?? '' }}" placeholder="{{$career->num_available ??'Enter Available jobs here'}}" type="number" name = "num_available"class="form-control" />

</div>



<input type="submit" name='publish' class="btn btn-warning" value = "Create"/>



</form>
</div>
</div>

</section>
</x-app-layout>