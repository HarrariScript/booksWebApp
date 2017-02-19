
<!doctype html>
<html lang="en">
<head>

    <title>Library </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style type="text/css">
        body {
            background: url("{{asset('images/background2.png')}}") no-repeat center center fixed ;
            background-size: 100% auto ;
        }
    </style>
</head>
<body>
<header class="jumbotron" style="opacity: 0.9   ">
    <div class="container">
        <div class="col-md-10">
            <h1> The Bookstore </h1>
            <p> Reading a book is like taking a journey </p>
        </div>
        <div class="col-md-2">
            Date : {{$date}} <br>    Time  {{$time}} <br>
            <a href="admin"> admin</a>
            <a href="library"> library</a>
        </div>

    </div>

</header>




@yield('content')






<footer class="container">
    &copy; All Right Reserved to Omar Harrari 2017
</footer>

</body>
</html>