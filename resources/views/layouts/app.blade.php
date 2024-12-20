<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{asset('assets/dest/css/bootstrap.min.css')}}"> 

        <style>
            .navbar-nav{
                visibility: visible;
                display: flex;
            }
            .nav-item{
                padding: 5px;
                margin: 29px 0;
                margin-top: 23px;
            }
            .mm{
                margin-top: -25px !important;
                margin: 0;
            }
            .nav-item a{
                font-size: 20px;
                transition: all .3s ease-in
            }

            .nav-item a:hover{
                border-bottom-width: 3px; 
                border-color: black;


            }
            .border-indigo-400 {
            --tw-border-opacity: 0; 
            border-color:unset; 
            }
            .border-b-2 {
                border-bottom-width: 0; 
            }
  
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
                  @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-1 sm:px-1 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif 

          

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </div>
    </body>
</html>
