<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="w-64 px-4 py-1 pl-8 text-sm bg-gray-800 rounded-full focus:outline-none focus:shadow-outline" placeholder="Search">
   <div class="absolute top-0">
     <svg xmlns="http://www.w3.org/2000/svg" class="w-4 mt-2 ml-2 text-gray-500 fill-current" viewBox="0 0 512 512"><title>ionicons-v5-f</title><path d="M464,428,339.92,303.9a160.48,160.48,0,0,0,30.72-94.58C370.64,120.37,298.27,48,209.32,48S48,120.37,48,209.32s72.37,161.32,161.32,161.32a160.48,160.48,0,0,0,94.58-30.72L428,464ZM209.32,319.69A110.38,
       110.38,0,1,1,319.69,209.32,110.5,110.5,0,0,1,209.32,319.69Z"/></svg>
   </div>
 <div wire:loading class="top-0 right-0 mt-3 mr-4 spinner"></div>
   
   @if (strlen($search) > 2)
   <div class="absolute w-64 mt-4 text-sm bg-gray-800 rounded">
    @if ($searchResults->count() > 0)
       <ul>
           @foreach ($searchResults as $result)
           <li class="border-b border-gray-700">
               <a href="{{ route('movies.show', $result['id']) }}" class="flex items-center block px-3 py-3 hover:bg-gray-700">
            @if($result['poster_path'])
                <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
           @else
                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
           @endif
                <span class="ml-4">{{ $result['title'] }}</span>
            </a>
           </li>
                
           @endforeach
       </ul>
    @else
    <div class="px-3 py-3">No Results for "{{ $search }}"</div>
    @endif
   </div>
   @endif
 </div>