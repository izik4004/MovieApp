@extends('layouts.main')

@section('content')
    <div class="border-b border-gray-800 movie-info">
        <div class="container flex px-4 py-16 mx-auto">
            <img src="/img/bossbaby.jpg" alt="bossbaby" class="w-96">
            <div class="ml-24">
                <h2 class="text-4xl font semi-bold">Boss Baby</h2>
                <div class="flex items-center text-sm text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-orange-500 fill-current" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12,19.1297757 L4.79401645,22.9181855 L6.17023685,14.8942049 L0.340473695,9.21159025 L8.39700823,8.04090726 L12,0.740448538 L15.6029918,8.04090726 L23.6595263,9.21159025 L17.8297632,14.8942049 L19.2059835,22.9181855 L12,19.1297757 Z M12,16.8702243 L16.5497215,19.2621544 L15.680802,14.1959651 L19.361604,10.6080699 L14.2748607,9.86892279 L12,5.25955146 L9.72513925,9.86892279 L4.63839598,10.6080699 L8.31919799,14.1959651 L7.4502785,19.2621544 L12,16.8702243 Z"/>
                    </svg>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Mar 20, 2020</span>
                    <span class="mx-2"></span>
                    <span>Action, Thriller, Drama</span>
                </div>

                <p class="mt-8 text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quos veniam nesciunt, ea asperiores officia fuga dolorem provident repellendus aperiam eligendi quaerat accusamus illum distinctio assumenda impedit aliquam fugiat! A.
                </p>

                <div class="mt-12">
                    <h4 class="font-semibold text-white">Featured Cast</h4>
                </div>
            </div>
        </div>
    </div>
@endsection