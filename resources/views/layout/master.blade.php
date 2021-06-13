<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body
    style="background-image: url('{{asset('images/banner_kopi.jpg')}}'); background-size: cover; background-position:center; background-repeat: no-repeat; background-attachment: fixed;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img
                    src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgaWQ9ImZsYXQiPjxwYXRoIGQ9Im00NTEuMzkgMjU2LjYzYy00NS4yNCA3MC41MS0xMTguOTIgMTA2LjUxLTE3Ni41MSA5MC42N2E5NC44IDk0LjggMCAwIDEgLTI2LjI3LTExLjY4cS0yLjE2LTEuMzgtNC4yMS0yLjg3Yy01NS41Mi0zOS45OS01OS42OC0xMzQuNTUtOC40NS0yMTQuMzggNTAtNzcuOTIgMTM0Ljc0LTExMy43MSAxOTQuMS04My45M2E5NC40MDggOTQuNDA4IDAgMCAxIDI1LjQ5IDE4LjY5YzQzLjIzIDQ0LjUgNDIuODkgMTMwLjIxLTQuMTUgMjAzLjV6IiBmaWxsPSIjNjIzYjI4Ii8+PHBhdGggZD0ibTQ1NS41NCA1My4xMy0xNS4wOSAxNC43M2EyMzEuNjYzIDIzMS42NjMgMCAwIDAgLTY2LjM5IDEyNi4wOCAyMzEuNjQ2IDIzMS42NDYgMCAwIDEgLTg2LjcgMTQzLjczbC0xMi40OCA5LjYzYTk0LjggOTQuOCAwIDAgMSAtMjYuMjctMTEuNjhxLTIuMTYtMS4zOC00LjIxLTIuODdsMTYuMDItMTIuMzZhMjMxLjYzNiAyMzEuNjM2IDAgMCAwIDg2LjcxLTE0My43MyAyMzEuNjA4IDIzMS42MDggMCAwIDEgNjYuMzktMTI2LjA4bDE2LjUzLTE2LjE0YTk0LjQwOCA5NC40MDggMCAwIDEgMjUuNDkgMTguNjl6IiBmaWxsPSIjODU1MDM3Ii8+PHBhdGggZD0ibTIxOS4zMjkgNDY4LjFhOTUuMDI1IDk1LjAyNSAwIDAgMSAtMjYuODEgMTAuMzdjLTEuNjcuMzctMy4zMy42OS01IC45Ni02Ny41MyAxMS4xMS0xMzcuNDYtNTIuNjYtMTU3Ljg3LTE0NS4zLTE5LjkzLTkwLjQxIDE0LjUyLTE3NS43MSA3Ny41LTE5Ni43NWE5MS4yNTggOTEuMjU4IDAgMCAxIDkuNjMtMi42NyA5NC44NzIgOTQuODcyIDAgMCAxIDIxLjYxLTIuMjFjNjIuMDMuNzggMTIyLjUyIDYxLjUgMTQxLjI2IDE0Ni41NSAxOC4wMiA4MS44MS04LjQ2IDE1OS40My02MC4zMiAxODkuMDV6IiBmaWxsPSIjNzQ0NjMwIi8+PHBhdGggZD0ibTIyMS4zMDkgNDUyLjQ2LTEuOTggMTUuNjRhOTUuMDI1IDk1LjAyNSAwIDAgMSAtMjYuODEgMTAuMzdjLTEuNjcuMzctMy4zMy42OS01IC45NmwyLjU0LTIwLjA4YTIzMi4xMjEgMjMyLjEyMSAwIDAgMCAxLjg0LTI5LjE1IDIzMS42MzEgMjMxLjYzMSAwIDAgMCAtNDIuNDktMTMzLjcxIDIzMS41OSAyMzEuNTkgMCAwIDEgLTQyLjQ4LTEzNi4wMWwuMjItMjMuMWE5MS4yNTggOTEuMjU4IDAgMCAxIDkuNjMtMi42NyA5NC44NzIgOTQuODcyIDAgMCAxIDIxLjYxLTIuMjFsLS4yMSAyMS4wOWMtLjAxLjc4LS4wMSAxLjU1LS4wMSAyLjMzYTIzMS41ODQgMjMxLjU4NCAwIDAgMCA0Mi40OSAxMzMuNjggMjMxLjY1NSAyMzEuNjU1IDAgMCAxIDQwLjY1IDE2Mi44NnoiIGZpbGw9IiM4ZjU2M2IiLz48cGF0aCBkPSJtMjkwLjE0OSAxMTUuNzIxYTggOCAwIDAgMSAtNS40NS0xMy44NThjMy42OC0zLjQyMyA3LjU0OC02LjczMSAxMS41LTkuODM0YTggOCAwIDEgMSA5Ljg4NyAxMi41OGMtMy42IDIuODMtNy4xMyA1Ljg0OC0xMC40ODYgOC45N2E3Ljk3MyA3Ljk3MyAwIDAgMSAtNS40NTEgMi4xNDJ6IiBmaWxsPSIjNzQ0NjMwIi8+PHBhdGggZD0ibTI1Mi44MjUgMTY1LjY4M2E4IDggMCAwIDEgLTcuMTU3LTExLjU2MyAxODIuMzIxIDE4Mi4zMjEgMCAwIDEgMjAuMDkxLTMxLjcxNCA4IDggMCAxIDEgMTIuNTYgOS45MSAxNjYuNDgzIDE2Ni40ODMgMCAwIDAgLTE4LjMyNSAyOC45MjcgOCA4IDAgMCAxIC03LjE2OSA0LjQ0eiIgZmlsbD0iIzc0NDYzMCIvPjxnIGZpbGw9IiM4YjU0M2EiPjxwYXRoIGQ9Im0xMDAuNTg4IDQxNi4wNDNhNy45ODcgNy45ODcgMCAwIDEgLTYuMDg1LTIuOGMtMy4yNjYtMy44MjEtNi40MS03LjgyNC05LjM0Ni0xMS45YTggOCAwIDAgMSAxMi45ODMtOS4zNTJjMi42NzYgMy43MTYgNS41NDYgNy4zNjcgOC41MjUgMTAuODUyYTggOCAwIDAgMSAtNi4wNzcgMTMuMnoiLz48cGF0aCBkPSJtMTQ4LjkzNSA0NTUuNDE1YTcuOTU5IDcuOTU5IDAgMCAxIC0zLjg1MS0uOTkzIDE4Mi4zNCAxODIuMzQgMCAwIDEgLTMwLjg0Ny0yMS40IDggOCAwIDAgMSAxMC40MjYtMTIuMTM2IDE2Ni4zNDQgMTY2LjM0NCAwIDAgMCAyOC4xMzcgMTkuNTE5IDggOCAwIDAgMSAtMy44NjQgMTUuMDF6Ii8+PC9nPjwvZz48L3N2Zz4="
                    height="28rem"> <b> SPK Coffee </b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('landing') }}">Home </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('kriteria') }}">Kriteria</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('biji-kopi') }}">Biji Kopi</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="{{ route('hasil') }}">Hasil</a>
                    </li>
                </ul>
                <form class="form-inline" method="POST" action="{{ url('logout') }}">
                    @csrf
                    @if (Auth::check())
                        <button class="btn btn-danger btn-sm" type="submit">
                            Logout
                        </button>
                    @else
                    <a class="btn btn-primary btn-sm" href="{{ route('register') }}"> Daftar / Login </a>
                    @endif
                </form>

            </div>
        </div>
    </nav>

    @yield('konten')


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

@stack('scripts')
</body>

</html>
