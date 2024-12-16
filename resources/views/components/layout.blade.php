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

    {{-- Navbar --}}
    <x-navbar></x-navbar>


    {{-- main section --}}
    <main>
        {{ $slot }}
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
