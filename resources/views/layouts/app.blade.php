<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Happy Zone BD</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container d-flex">
                <a class="navbar-brand" href="{{ url('/') }}">
                <div class="d-flex ">
                <div class="pr-1">
                <img src="/icons/happyzonebd.jpg" style="max-height: 80px">
                </div>
                <b class="pt-4">
                    Happy Zone BD
                </b>

                </div>
                </a>


                <div class="container" style="margin:auto; justify-content: center">

                <form action="{{route('search')}}" method="GET" class="search-form">
                <div class="input-group ">
                    <input type="text" name="query" id="query" class="form-control form-control-lg rounded-0 border-info search-box" style="width: 70%" placeholder="Search for product" value="{{request()->input('query')}}" autocomplete="off" required>
                    <div class="input-group-append">
                        <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
                    </div>
                </div>
                </form>

                <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
                    <div class="list-group" id="show-list">
                        <!-- Here autocomplete list will be display -->
                    </div>
                </div>
                </div>






                <!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script-->
                <!--script src="">
                    $(document).ready(function () {
                        // Send Search Text to the server
                        $("#search").keyup(function () {
                            let searchText = $(this).val();
                            if (searchText != "") {
                                $.ajax({
                                    url: "action.php",
                                    method: "post",
                                    data: {
                                        query: searchText,
                                    },
                                    success: function (response) {
                                        $("#show-list").html(response);
                                    },
                                });
                            } else {
                                $("#show-list").html("");
                            }
                        });
                        // Set searched text in input field on click of search button
                        $(document).on("click", "a", function () {
                            $("#search").val($(this).text());
                            $("#show-list").html("");
                        });
                    });
                </script-->



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <big><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></big>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <big><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></big>
                                </li>
                            @endif
                            <li class="nav-item">
                                <big><!--a class="nav-link" href="/p/create">Admin</a--></big>
                            </li>
                        @else
                           <big> <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="#">
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="/p/create">
                                        Add New Item
                                    </a>
                                    <a class="dropdown-item" href="/p/delete">
                                        Remove Item
                                    </a>

                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li></big>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>
