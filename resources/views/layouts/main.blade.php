<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FUNBOX</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="font-sans text-white bg-black" >
        <section class="bg-right bg-cover bg-opacity-5" style="background-image: url({{ asset('img/joker.jpg') }})">
        <nav class="bg-gradient-to-l from-black to gray-900" >
            <div class="container flex items-center justify-between px-4 py-6 mx-auto md:flex-row">
                <ul class="flex items-center md:flex-row">
                    <a href="" class="text-5xl font-bold text-redish">FUNBOX</a>
                    <li class="md:ml-24">
                        <a href="#" class="pb-2 text-lg border-b-2 border-redish hover:text-gray-300">Movies</a>
                    </li>
                    <li class="md:ml-12">
                        <a href="#" class="text-lg hover:text-gray-300">Series</a>
                    </li>
                    <li class="md:ml-12">
                        <a href="#" class="text-lg hover:text-gray-300">Trending</a>
                    </li>
                    <li class="md:ml-12">
                        <a href="#" class="text-lg hover:text-gray-300">Theatre</a>
                    </li>
                </ul>
                <div class="flex flex-col items-center md:flex-row">
                    <div class="relative mt-3 md:mt-0">
                        <input type="text" class="w-64 px-4 py-1 pl-8 text-sm bg-gray-800 rounded-full focus:outline-none focus:shadow-outline " placeholder="Search">
                    <div class="absolute top-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mt-2 ml-2 text-gray-500 fill-current" viewBox="0 0 512 512"><title>ionicons-v5-f</title>
                        <path d="M456.69,421.39,362.6,327.3a173.81,173.81,0,0,0,34.84-104.58C397.44,126.38,319.06,48,222.72,48S48,126.38,48,222.72s78.38,174.72,174.72,
                        174.72A173.81,173.81,0,0,0,327.3,362.6l94.09,94.09a25,25,0,0,0,35.3-35.3ZM97.92,222.72a124.8,124.8,0,1,1,124.8,124.8A124.95,124.95,0,0,1,97.92,222.72Z"/>
                        </svg>
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


        <!-----Herosection --->
        <section class="h-screen text-gray-600 bg-right bg-cover bg-gradient-to-l from-black to gray-900" >
            <div class="container flex flex-col items-center px-5 py-24 mx-auto md:flex-row">
              <div class="flex flex-col items-center mb-16 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-right md:mb-0">
                <h1 class="mt-10 mb-4 font-semibold text-left text-white lg:text-6xl sm:text-6xl">Stream And Download Trending <br> 
                  <span>Movies All For Free.</span>
                </h1>
                <p class="mt-8 text-lg leading-relaxed text-white">Copper mug try-hard pitchfork pour-over freegan heirloom </p>
                <div class="flex justify-center mt-8">
                  <button class="inline-flex px-8 py-2 text-lg text-white border-0 rounded bg-redish focus:outline-none hover:bg-red-500">Sign Up</button>
                </div>
              </div>
            </div>

            <div class="container flex items-center justify-center mx-auto md:flex-row">
                <form class="example" action="action_page.php">
                    <input type="text" class="p-5 mr-0 w-96" placeholder="Search.." name="search">
                    <button type="submit" class="px-5 ml-0 text-white md:py-4 bg-redish place-items-start">Get Started</button>
                  </form>
                </div>  
                
        </section>
         <!-----End of hero section---->
        
    </section>
        @yield('content')
    </body>
</html>
