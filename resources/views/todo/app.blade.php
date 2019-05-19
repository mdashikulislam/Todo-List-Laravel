<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-theme.css')}}">
</head>
<body>
    @include('inc.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('inc.message')
                @yield('content')
            </div>
        </div>
    </div>
    <footer>
        <p class="text-center" id="footer">Copyright &copy; 2019 Todo List</p>
    </footer>
    <style>
        .well span{
            font-size: 16px;
            margin-left: 20px;
        }
    </style>
    <script src="{{asset('bootstrap/jquery-3.4.1.min.js')}}"></script>
    <script  src="{{asset('bootstrap/bootstrap.js')}}"></script>
</body>
</html>