@extends('master')

@section('title', 'Message List')

@section('content')

<h2>Posts</h2>

<ul>
    @foreach ($posts as $post)
        <li>
            <b>{{$post->title}}:</b><br>
            {{$post->content}}<br>
            {{$post->created_at->diffForHumans()}}
        </li>
    @endforeach
</ul>


@endsection
