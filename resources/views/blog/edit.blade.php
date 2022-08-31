<x-layout>
<x-slot:title>
    Add New Post
</x-slot>
<!-- about breadcrumb -->
<section class=" text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5">
        <div class="container grid-breadcrumb ">
            <h2 class="title-big">Create Post</h2>
            
        </div>
    </div>
</section>
<section class="">
<div class="">
<div class="container ">
<form class="mt-4" action="{{route('update',$post->id)}}" method="post">

<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">

<input required="required" value="{{ $post->post_title }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />

</div>

<div class="form-group">

<textarea name='body'class="form-control">{{ $post->post_content }}</textarea>

</div>

<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>

<input type="submit" name='save' class="btn btn-default" value = "Save Draft" />

</form>
</div>
</div>

</section>
</x-layout>