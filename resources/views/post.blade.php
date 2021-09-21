@extends('master')

@section('title', 'Message List')

@section('content')


<?php
    if(isset($_GET['submit'])) {
?>
        @if($posts->isNotEmpty())
            @foreach ($posts as $post)
                <div class="post-list">
                    {{-- <p>{{ $post->title }}</p>
                    <p>{{ $post->description }}</p>
                    <p>{{ $post->content }}</p>
                    <p>{{ $post->category }}</p>
                    <p>{{ $post->author}}</p>
                    <img src="{{ $post->image }}"> --}}
                </div>
            @endforeach
        @else
            <div>
                <h2>No posts found</h2>
            </div>
        @endif
<?php
    }
?>



<br>

<ul>
    @foreach ($posts as $post)


        <li class="{{ $post->category }} posted">
            <b><h2><a href="/posts/{{$post->id}}">{{$post->title}} created by: <strong>{{$post->author}}</strong></a></b></h2>
            {{$post->description}}<br>
            {{$post->created_at->diffForHumans()}}<br>
        </li><br>
    @endforeach
</ul>



@endsection





