{{-- @section('title', 'Home') --}}

<x-layout title="Home">
    <!-- Hero Section -->
    <section class="relative h-screen text-white py-20 px-6 md:px-20">
        <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center -z-10"
            style="background-image: url('{{ asset('asset/img/hero-bg.png') }}')"></div>
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-black to-transparent"></div>
        <div class="max-w-4xl relative">
            <div class="mb-6"> <span class="text-sm uppercase">Posted on Startup</span> </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Step-by-step guide to choosing great font pairs</h1>
            <div class="mb-6"> <span class="text-yellow-500">By James West</span> <span class="text-gray-400">|
                    May 23, 2022</span> </div>
            <p class="text-gray-300 mb-6">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p> <a href="#"
                class="bg-yellow-500 text-black font-semibold py-3 px-6 rounded hover:bg-yellow-600 transition duration-300">Read
                More ></a>
        </div>
    </section>

    <section class="relative mx-auto py-20 px-6 md:px-20">
        <!-- Featured Post -->
        <h1 class="text-2xl md:text-3xl font-bold mb-6">Featured Post</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Featured Post -->
            <div class="lg:col-span-2 bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ asset('asset/img/features.png') }}" alt="Featured Post" class="w-full h-60 object-cover">
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">
                        By <span class="text-indigo-600">John Doe</span> | May 23, 2022
                    </p>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Exceptuer sint occaecat cupidatat non proident.
                    </p>
                    <a href="#"
                        class="inline-block bg-yellow-400 text-gray-800 font-semibold px-4 py-2 rounded-lg">Read More
                        →</a>
                </div>
            </div>

            <!-- All Posts -->

            <div>
                <h1 class="text-2xl md:text-3xl font-bold mb-6">All Post</h1>
                <div class="space-y-4">
                    <div class="p-4 bg-white rounded-lg shadow-md hover:bg-yellow-100 cursor-pointer transition">
                        <p class="text-sm text-gray-500">
                            By <span class="text-indigo-600">John Doe</span> | Aug 23, 2021
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            8 Figma design systems that you can download for free today.
                        </h3>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-md hover:bg-yellow-100 cursor-pointer transition">
                        <p class="text-sm text-gray-500">
                            By <span class="text-indigo-600">John Doe</span> | Aug 23, 2021
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            8 Figma design systems that you can download for free today.
                        </h3>
                    </div>
                    <div class="p-4 bg-white rounded-lg shadow-md hover:bg-yellow-100 cursor-pointer transition">
                        <p class="text-sm text-gray-500">
                            By <span class="text-indigo-600">John Doe</span> | Aug 23, 2021
                        </p>
                        <h3 class="text-lg font-semibold text-gray-800">
                            8 Figma design systems that you can download for free today.
                        </h3>
                    </div>
                </div>
                <div class="mt-6 text-right">
                    <a href="#" class="text-indigo-600 hover:underline font-medium">View All →</a>
                </div>
            </div>
        </div>
    </section>
</x-layout>
