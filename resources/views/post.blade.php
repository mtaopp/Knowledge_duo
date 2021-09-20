@extends('master')

@section('title', 'Message List')

@section('content')

<a href="/dashboard" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Register/Login</a>

<h2>Search</h2>
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button name="submit" class="inline-flex items-center px-4 py-2 mx-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit">Search</button>
</form>

<?php
  //  if(isset($_GET['submit'])) {
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
 //   }
?>



<hr>

<br>
<h1><strong>Posts</strong></h1>
<br>

<ul>
    @foreach ($posts as $post)
        <li>
            <b><a href="/posts/{{$post->id}}">{{$post->title}}:</a></b><br>
            {{$post->description}}<br>
            {{$post->content}}<br>
            created by: <strong>{{$post->author}}</strong>
            {{$post->created_at->diffForHumans()}}<br>
        </li><br>
    @endforeach
</ul>


@endsection
