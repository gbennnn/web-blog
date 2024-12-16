<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finsweet</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">


    <!-- Navbar -->
    <nav class="px-6 z-[1000] md:px-20 py-6 bg-[#232536] shadow md:flex md:items-center md:justify-between">
        <!-- Logo & Hamburger -->
        <div class="flex justify-between items-center">
            <span class="text-xl font-bold cursor-pointer">
                <a href="#" class="text-white">&#123;Finsweet</a>
            </span>

            <!-- Hamburger Menu -->
            <span id="hamburger" class="text-white text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        <!-- Navigation Links -->
        <ul id="navMenu"
            class="md:flex z-[1000] md:items-center md:static absolute bg-white md:bg-transparent top-[-400px] w-full md:w-auto left-0 md:py-0 py-6 md:pl-0 pl-7 transition-all duration-300 ease-in shadow md:shadow-none opacity-0 md:opacity-100">
            <li class="mx-4 md:my-0">
                <a href="#" class="text-gray-800 md:text-white text-md hover:text-gray-400 duration-300">Home</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#"
                    class="text-gray-800 md:text-white text-md hover:text-gray-400 duration-300">Blog's</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-gray-800 md:text-white text-md hover:text-gray-400 duration-300">About
                    Us</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
                <a href="#" class="text-gray-800 md:text-white text-md hover:text-gray-400 duration-300">Contact
                    Us</a>
            </li>
            <button
                class="bg-black text-white md:bg-white md:text-black font-semibold duration-300 hover:bg-gray-700 rounded px-6 py-2 mx-4">
                Subscribe
            </button>
        </ul>
    </nav>


    <main class="">
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
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p> <a
                    href="#"
                    class="bg-yellow-500 text-black font-semibold py-3 px-6 rounded hover:bg-yellow-600 transition duration-300">Read
                    More ></a>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-[#232536] text-white py-8 px-6 md:px-16">
        <div class="max-w-7xl mx-auto">

            <!-- Footer Logo & Navigation -->
            <div class="flex flex-col md:flex-row md:justify-between items-start mb-8">
                <!-- Logo -->
                <div class="mb-6 md:mb-0">
                    <h1 class="text-2xl font-bold cursor-pointer">&#123;Finsweet</h1>
                </div>

                <!-- Navigation -->
                <ul class="grid grid-cols-2 gap-4 md:flex md:space-x-8 space-y-0">
                    <li><a href="#" class="hover:text-gray-400 duration-300 block">Home</a></li>
                    <li><a href="#" class="hover:text-gray-400 duration-300 block">Blog</a></li>
                    <li><a href="#" class="hover:text-gray-400 duration-300 block">About us</a></li>
                    <li><a href="#" class="hover:text-gray-400 duration-300 block">Contact us</a></li>
                    <li><a href="#" class="hover:text-gray-400 duration-300 block">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Subscribe Section -->
            <div class="bg-[#2D2E3B] rounded-lg px-6 py-8 md:flex md:items-center md:justify-between">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl font-semibold">Subscribe to our news letter to get latest updates and news</h2>
                </div>
                <!-- Input and Button -->
                <div class="flex w-full md:w-auto">
                    <input type="email" placeholder="Enter Your Email"
                        class="px-4 py-2 w-full md:w-auto rounded-l-md text-gray-700 focus:outline-none">
                    <button
                        class="bg-yellow-400 text-black px-6 py-2 font-semibold rounded-r-md hover:bg-yellow-500 duration-300">
                        Subscribe
                    </button>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="mt-8 md:flex md:justify-between items-center">
                <div class="text-gray-400">
                    <p>Finstreet 118 2561 Fintown</p>
                    <p>Hello@finsweet.com &nbsp; 020 7993 2905</p>
                </div>
                <!-- Social Icons -->
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-gray-300 duration-300"><ion-icon
                            name="logo-facebook"></ion-icon></a>
                    <a href="#" class="hover:text-gray-300 duration-300"><ion-icon
                            name="logo-twitter"></ion-icon></a>
                    <a href="#" class="hover:text-gray-300 duration-300"><ion-icon
                            name="logo-instagram"></ion-icon></a>
                    <a href="#" class="hover:text-gray-300 duration-300"><ion-icon
                            name="logo-linkedin"></ion-icon></a>
                </div>
            </div>
        </div>
    </footer>


    {{-- JS --}}
    <script src="{{ asset('asset/js/script.js') }}"></script>

    {{-- Ionics Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
