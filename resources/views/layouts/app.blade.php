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

        <style>
            .navbar-nav{
                visibility: visible;
                display: flex;
            }
            .nav-item{
                padding: 10px
            }
  
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            {{-- @isset($header) --}}
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                       <nav class="navbar navbar-expand-lg bg-body-tertiary">
                            <div class="container-fluid">
                                
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav" >
                                        <li class="nav-item">
                                        {{-- <a class="nav-link active" aria-current="page" href="#">Home </a> --}}
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
                    </div>
                </header>
            {{-- @endisset --}}
           

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
