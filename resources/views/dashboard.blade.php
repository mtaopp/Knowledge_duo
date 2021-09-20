<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2>Create new post: </h2>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <form action="/create" method="post">
                        <input type="text" name="category" placeholder="Category" autocomplete="off">
                        <input type="text" name="title" placeholder="Title" autocomplete="off"><br>
                        <input type="text" name="author" placeholder="Author" autocomplete="off">
                        <input type="text" name="description" placeholder="Description" autocomplete="off"><br>
                        <input type="text" name="content" placeholder="Content" autocomplete="off"><br>
                        @csrf
                        <button class="btn" type="submit">Submit</button><a href="/" class="btn">Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

