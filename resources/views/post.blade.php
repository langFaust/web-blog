@extends('layouts.main')

@section('container')

<div class="container">
        <div class="row justify-content-center mb-5 ">
            <div class="col-md-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p class="mb-3">By. <a href="/blog?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/blog?category= {{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                @if ($post->image)
                 <div style="max-height: 350px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                alt="{{ $post->category->name }}" class="img-fluid">

              @endif
   
              
                
                <article class="my-3">
                    {!! $post->body !!}
                </article>

                <a href="/blog" class="text-decoration-none d-block mt-3">Back to posts</a>
            </div>
        </div>
</div>
    
    
@endsection