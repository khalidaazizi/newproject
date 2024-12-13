<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('assets/dest/css/bootstrap.min.css')}}">
    <title>Laravel</title>
    <style>
        
        .navbar-collapse{
            display: flex;
            justify-content: flex-end;
        }
        h1{
           margin: 250px 500px;
           color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid my-2">
            <a class="navbar-brand " href="#">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">register</a>
                </li>
                
            </ul>
            </div>
        </div>
        </nav>  
    <h1>Welcome to Laravel</h1>
</body>
</html>