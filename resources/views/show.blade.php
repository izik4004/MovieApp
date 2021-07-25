@extends('layouts.layout1')

@section('content')
    <div class="border-b border-gray-800 movie-info">
   
        <div class="container flex flex-col px-4 py-16 mx-auto md:flex-row">
            
            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font semi-bold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items-center text-sm text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                    </svg>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2"></span>
                    <span> @foreach ($movie['genres'] as $genre )
                        {{ $genre['name'] }}@if (!$loop->last), @endif
                    @endforeach</span>
                </div>

                <p class="mt-8 text-gray-300">
                   {{ $movie ['overview']}}
                </p>
                
   
                    <iframe src="https://www.2embed.ru/embed/tmdb/movie?id={{ $movie['id'] }}" frameborder=”1″ scrolling=”no” allowfullscreen=”allowfullscreen” class="max-w-full" > 
              
                   
                
                <div class="mt-12">
                    <h4 class="font-semibold text-white">Featured Cast</h4>
                    <div class="flex mt-4">
                            @foreach ($movie['credits']['crew'] as $crew )
                            @if($loop->index < 2)
                            <div class="mr-8"> 
                                <div>{{ $crew['name'] }}</div>
                                <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                            </div>
                            @endif
                            @endforeach
                          
                       
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center px-5 py-4 font-semibold text-gray-900 transition duration-150 ease-in-out bg-blue-500 rounded hover:bg-orange-600">
                        <svg class="w-6 fill-current" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><title>ionicons-v5-c</title><path d="M256,48C141.31,48,48,141.31,48,256s93.31,208,208,208,208-93.31,208-208S370.69,48,256,48Zm74.77,217.3L216.32,334.44A10.78,10.78,0,0,1,200,325.13V186.87a10.78,10.78,0,0,1,16.32-9.31L330.77,246.7A10.89,10.89,0,0,1,330.77,265.3Z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
                
            </div>
        </div>
    </div>

    <div class="border-b border-gray-800 movie-cast">
        <div class="container px-4 py-16 mx-auto">
            <h2 class="text-4xl font-semibold">CAST</h2>
            <div class="grid gap-8 gap-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                @foreach ($movie['credits']['cast'] as $cast)
                @if($loop->index < 5)
                <div class="mt-8">
                    <a href="">
                        <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}" alt="poster" class="transition duration-150 ease-in-out hover:opacity-75">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">{{ $cast['name'] }}</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            {{ $cast['character'] }}
                        </div> 
                    </div>
                 </div>
                 @endif
                @endforeach
           
              
            
         
        {{-- <div class="text-sm text-gray-400"> --}}
            {{-- @foreach ($movie['genre_ids'] as $genre )
                {{ $genres->get($genre) }}@if (!$loop->last), @endif
            @endforeach --}}
        </div>
    </div>
</div>   
@endsection