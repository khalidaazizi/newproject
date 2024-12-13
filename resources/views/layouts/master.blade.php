<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Bootstrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/dest/css/bootstrap.min.css')}}">
    
    {{-- link css --}}
    @yield('css')
</head>
<body>
           

                <section class="container-fluid p-0">
                    {{-- menu --}}
                     <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav" >
                                        <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home </a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('slider.index')}}">slider</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                          <a class="nav-link" href="{{route('post.index')}}">post</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>    
                    </nav>
                         {{-- contant --}}
                         @yield('contant')
                </section>



      <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('js')
</body>
</html>