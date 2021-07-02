<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
           <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="font-sans text-white bg-gray-900">
        <nav class="border-b border-gray-800">
            <div class="container flex items-center justify-between px-4 py-6 mx-auto md:flex-row">
                <ul class="flex items-center md:flex-row">
                    <li>
                        <a href="#" class="h"></a>
                    </li>
                    <li class="md:ml-16">
                        <a href="#" class="hover:text-gray-300">Movies</a>
                    </li>
                    <li class="md:ml-6">
                        <a href="#" class="hover:text-gray-300">TV Shows</a>
                    </li>
                    <li class="md:ml-6">
                        <a href="#" class="hover:text-gray-300">Movies</a>
                    </li>
                </ul>
                <div class="flex flex-col items-center md:flex-row">
                    <div class="relative mt-3 md:mt-0">
                        <input type="text" class="w-64 px-4 py-1 pl-8 text-sm bg-gray-800 rounded-full focus:outline-none focus:shadow-outline " placeholder="Search">
                    <div class="absolute top-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mt-2 ml-2 text-gray-500 fill-current" viewBox="0 0 512 512"><title>ionicons-v5-f</title><path d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z"/></svg>
                    </div>
                    </div>
                    <div class="mt-3 md:ml-4 md:mt-0">
                        <a href="">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
