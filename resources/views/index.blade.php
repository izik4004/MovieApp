@extends('layouts.main')

@section('content')

<!----- Hero section --------------->
<section class="h-full text-gray-600 bg-right bg-cover bg-gradient-to-l from-black to gray-900" >
    <div class="container flex flex-col items-center px-5 mx-auto lg:py-24 md:flex-row md:py-2">
      <div class="flex flex-col items-center mb-20 text-center lg:flex-grow md:w-1/2 md:items-center md:text-right md:mb-0 sm:text-center">
        <h1 class="mt-10 mb-4 font-semibold text-white md:text-center lg:text-6xl sm:text-6xl"><span class="text-redish">Stream And </span>Download Movies  <br> 
          <span><span class="text-redish">All For Free.</span></span>
        </h1>
       
        
      </div>
    </div>
    <p class="mt-8 mb-6 text-lg leading-relaxed text-center text-white md:mt-2">Enter your email to get latest updates on current and trending movies.</p>
    <div class="flex items-center justify-center pb-6 mx-auto md:py-0 md:w-1/2 ">
        <form>
            <div class="flex flex-col overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row">
                <input class="px-20 py-4 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" name="email" placeholder="Enter your email" aria-label="Enter your email">
                
                <button class="px-4 py-4 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-200 transform bg-redish hover:bg-red-900 focus:bg-red-600 focus:outline-none">Get Started</button>
            </div>
        </form>
    </div>    
</section>
 <!-----End of hero section---->

</section>

        
<!-------- PopularMovies ----------->
    <div class="container mx-auto mt-24">
        <div class="popular-movies">
            <h2 class="text-2xl font-bold tracking-wider text-white uppercase">Popular <span class="text-redish"> Movies </span></h2>
            <div class="grid gap-8 gap-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($popularMovies as $popularMovie)
                    <x-movie-card :popularMovie="$popularMovie" :genres="$genres"/>
                @endforeach        
            </div>
        </div>
        <div class="flex mt-4 justify-items-center">
            <button class="px-4 py-2 mx-auto text-sm text-white border-2 border-red-500 hover:bg-red-600">View More</button>
        </div>


    <!----end of Popular Movies ----->

    <!-------Now Playing Section -------------->
        <div class="py-24 now-playing-movies">
            <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Now Playing</h2>
            <div class="grid gap-8 gap-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($nowPlayingMovies as $popularMovie)
                <x-movie-card :popularMovie="$popularMovie" :genres="$genres"/> 
                @endforeach         
             </div>
        </div>
    </div>

@endsection