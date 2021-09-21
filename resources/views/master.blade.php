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
            <div id="left"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas dolorum perferendis illum saepe repudiandae expedita accusantium hic aperiam odit alias, quaerat tempora deleniti deserunt facere quibusdam quis sed facilis ut. Dolor provident modi debitis!</p>
            <a href="">Logo</a>
            <footer><b>Cheese footer</b></footer>
            </div>
            <div id="right">asdsaddas</div>
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
