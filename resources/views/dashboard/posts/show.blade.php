@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3 ">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
           <a class="btn btn-success" href="/dashboard/posts">Back to all my posts</a>
           <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit">Edit</a>
           <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">delete</button>
        </form>

        @if ($post->image)
        <div style="max-height: 350px; overflow: hidden;">
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
            alt="{{ $post->category->name }}" class="img-fluid mt-3">

        @endif
            
            <article class="my-3">
                {!! $post->body !!}
            </article>

            <a href="/dashboard/posts" class="text-decoration-none d-block mt-3">Back to posts</a>
        </div>
    </div>
</div>

@endsection