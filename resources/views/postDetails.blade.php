@extends('master')

@section('title', $post->category)

@section('content')

<h2>{{$post->title}}</h2>
<p>{{$post->content}}<br>
{{$post->author}}<br>
{{$post->category}}<br>
{{$post->description}}<br>
{{$post->created_at->diffForHumans()}}<br></p>



<form action="/posts/{{$post->id}}" method="post">
    @csrf
    @method('delete')
    <button class="btn" type="submit">Delete</button>
</form>


@endsection
