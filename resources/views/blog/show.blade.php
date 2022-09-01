<x-layout>
<x-slot:title>
    Add New Post
</x-slot>
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
        <div class="container grid-breadcrumb py-2">
            <h2 class="title-big">Create Post</h2>
            
        </div>
    </div>
</section>
<section class="w3l-about-breadcrumb ">
<div class="mt-4">
<div class="container mt-4">
    @if($post)
    <p>{!! $post->post_content !!}</
        
    @endif
</div>
</div>

</section>
</x-layout>