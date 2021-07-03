@extends('layouts.main')

@section('content')

<!----- Hero section --------------->


        

    <div class="container px-4 mx-auto">
        <div class="popular-movies">
            <h2 class="text-2xl font-bold tracking-wider text-white uppercase">Trending <span class="text-redish"> Movies </span></h2>
            <div class="grid gap-8 gap-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <div class="mt-8">
                        <a href="">
                            <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                            </svg>
                            
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Mar 20, 2020</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                    </a>
                <div class="mt-2">
                    <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                    <div class="flex items-center mt-1 text-sm text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                        </svg>
                        
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Mar 20, 2020</span>
                    </div>
                    <div class="text-sm text-gray-400">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="">
                    <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                <div class="flex items-center mt-1 text-sm text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                    </svg>
                    
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Mar 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400">
                    Action, Thriller, Comedy
                </div>
            </div>
        </div>
        <div class="mt-8">
            <a href="">
                <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
            </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                <div class="flex items-center mt-1 text-sm text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                    </svg>
                    
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Mar 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400">
                    Action, Thriller, Comedy
                </div>
            </div>
         </div>
        <div class="mt-8">
                <a href="">
                    <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                <div class="flex items-center mt-1 text-sm text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                    </svg>
                    
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Mar 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400">
                    Action, Thriller, Comedy
                </div>
            </div>
        </div>
            </div>
        </div>

        <div class="py-24 now-playing-movies">
            <h2 class="text-lg font-semibold tracking-wider text-orange-500 uppercase">Now Playing</h2>
            <div class="grid gap-8 gap-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                <div class="mt-8">
                        <a href="">
                            <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                        </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                        <div class="flex items-center mt-1 text-sm text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                            </svg>
                            
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Mar 20, 2020</span>
                        </div>
                        <div class="text-sm text-gray-400">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                    </a>
                <div class="mt-2">
                    <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                    <div class="flex items-center mt-1 text-sm text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                        </svg>
                        
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Mar 20, 2020</span>
                    </div>
                    <div class="text-sm text-gray-400">
                        Action, Thriller, Comedy
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <a href="">
                    <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
                </a>
            <div class="mt-2">
                <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
                <div class="flex items-center mt-1 text-sm text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                    </svg>
                    
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Mar 20, 2020</span>
                </div>
                <div class="text-sm text-gray-400">
                    Action, Thriller, Comedy
                </div>
            </div>
        </div>
        <div class="mt-8">
            <a href="">
                <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
            </a>
        <div class="mt-2">
            <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
            <div class="flex items-center mt-1 text-sm text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                </svg>
                
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Mar 20, 2020</span>
            </div>
            <div class="text-sm text-gray-400">
                Action, Thriller, Comedy
            </div>
        </div>
        </div>
        <div class="mt-8">
            <a href="">
                <img src="/img/bossbaby.jpg" alt="bossbaby" class="transition duration-150 ease-in-out hover:opacity-75">
            </a>
        <div class="mt-2">
            <a href="#" class="mt-2 text-lg hover:text-gray:300">Parasite</a>
            <div class="flex items-center mt-1 text-sm text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                </svg>
                
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Mar 20, 2020</span>
            </div>
            <div class="text-sm text-gray-400">
                Action, Thriller, Comedy
            </div>
        </div>
    </div>
    </div>
</div>
</div>

<footer class="container px-4 pt-12 mx-auto">
    <div class="flex flex-col items-center">
        
            <h1>FUNBOX</h1> 
       
       
        <div class="flex search-movie">
            <input type="text" placeholder="Search">
        </div>
    </div>
    
</footer>
    
@endsection