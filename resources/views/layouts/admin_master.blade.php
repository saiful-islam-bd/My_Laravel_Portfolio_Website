<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- fav icon --}}
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('img/fav icon/pngtree-english-letter-s-english-icon-image_1157075-removebg-preview.png')}}">

    {{-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    {{-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark" style="background-color:#1e2327;">
            <div class="container" style="max-width: 1226px; padding-left: 0px;padding-right: 0px;">
                <a class="navbar-brand" href=""><img src="{{ asset('assets/admin/logo/1712655904010.png') }}"
                        alt="" style="width: 21px;"> Admin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">


                    <ul class="navbar-nav side-nav" style="background:#071427;">
                        <li class="nav-item">
                            <a class="nav-link text-white" style="margin-left: 20px;"
                                href="
                                "><i class="fa-solid fa-house"
                                    style="margin-right: 8px;"></i> Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('intro.index') }}" style="margin-left: 20px;"><i
                                    class="fa-solid fa-user-tie" style="margin-right: 8px;"></i> Intro Section</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.index') }}" style="margin-left: 20px;"><i
                                    class="fa-solid fa-user-tie" style="margin-right: 8px;"></i> About Me</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="  " style="margin-left: 20px;"><i
                                    class="fa-solid fa-briefcase" style="margin-right: 8px;"></i> My Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="  " style="margin-left: 20px;"><i
                                    class="fa-solid fa-briefcase" style="margin-right: 8px;"></i> My Portfolio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="  " style="margin-left: 20px;"><i class="fa-solid fa-list"
                                    style="margin-right: 8px;"></i> Clients Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="  " style="margin-left: 20px;"><i
                                    class="fa-solid fa-briefcase" style="margin-right: 8px;"></i> Contact </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('trashed')}}" style="margin-left: 20px;"><i
                                    class="fa-solid fa-clipboard-check" style="margin-right: 8px;"></i> Trash Bin</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" style="margin-left: 20px;"><i
                                    class="fa-solid fa-user-tie" style="margin-right: 8px;"></i> Admins</a>
                        </li>
                    </ul>



                    <ul class="navbar-nav ml-md-auto d-md-flex" style="float: right !important;">

                        <li class="nav-item">
                            <a class="nav-link" href="  "><i class="fa-solid fa-house"
                                    style="margin-right: 8px; font-size: 20px;"></i>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fa-regular fa-user" style="margin-right: 8px;"></i>

                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="" method="POST" class="d-none">
                                    @csrf
                                </form>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">

            <main class="py-4">
                @yield('content')
            </main>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</body>

</html>
