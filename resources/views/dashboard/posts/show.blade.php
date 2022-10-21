@extends('dashboard.layouts.main')
@section('container')
{{-- @dd($category)  --}}
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/posts/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                post</a>

            <a href="/posts/edit/{{$post->id}}" class="btn btn-warning"><span data-feather="edit"></span>
                edit</a>

            
 
            <form action="/posts/delete/{{$post->id}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
            

            @if($post->image)
            <div style="max-height: 350px; overflow : hidden">
                <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->name }}" alt="{{ $post->name }}" class="img-fluid">
            @endif
            <div class="">
              <p class="font-weight-bold">
                $.{{ $post->harga }}
              </p>
            </div>
            <article class="my-1 fs-9">
                {!! $post->body !!}
            </article>


        </div>
    </div>
</div>
@endsection