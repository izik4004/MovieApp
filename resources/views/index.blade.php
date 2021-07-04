@extends('layouts.main')

@section('content')

<!----- Hero section --------------->


        
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