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
</x-layout>
