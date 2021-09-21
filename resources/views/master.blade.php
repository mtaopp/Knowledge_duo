<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="container1">
        <div class="wrapper">
            <div id="left">
                <div class="wrapper">
                    <div id="logo">
                        <img src="/img/baYs9AuHxx9QXeYBiMvSLU-1200-80.jpg" alt="">
                    </div>
                    <div class="form">
                        <form action="{{ route('search') }}" method="GET">
                            <input type="text" name="search" required/>
                            <button name="submit" class="inline-flex items-center px-4 py-2 mx-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" type="submit">Search</button>
                        </form>
                    </div>

                <div id="intro"><p>Welcome to Knowledge Tree. This space was created to offer beginners a brief insight into the foundation stones of various web development tools and technologies. Take your time, stay awhile, and, most importantly, enjoy yourself as you learn.</div>
                    <footer><b>Cheese footer</b><a href="/dashboard" id="login" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Login</a>

                    </footer>

                </div>
            </div>
            <div id="right"> ghjg</div>
        </div>

    </div>


<!--
<div class="container1">
    <div class="flex-container1">
        <div id="left" class="container1">
            <div class="flex-container1">

                <div id="logo">
                    <h1><a href="/">Knowledge Tree</a></h1><br>
                </div>

                <div id="topics">
                    Topics
                    </div>

            </div>
        </div>

        <div id="right">
            <div class="container1">

                <div class="categories">
                    @yield('content')
                </div>

            </div>
        </div>
    </div>
</div>
-->

</body>
</html>
