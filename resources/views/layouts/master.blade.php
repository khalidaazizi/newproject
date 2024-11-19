<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    {{-- <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" /> --}}
    <link rel="stylesheet" href="{{asset('assets/dest/css/bootstrap.min.css')}}">
    
    {{-- link css --}}
    @yield('css')
</head>
<body>
           

                <section class="container-fluid p-0">
                    @yield('contant')
                </section>



     <!-- Bootstrap JS and dependencies -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/dest/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/dest/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/dest/js/jquery.min.js')}}"></script>
    @yield('js')
</body>
</html>