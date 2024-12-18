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

    <!-- Featured Post -->
    <section class="relative mx-auto py-20 px-6 md:px-20">
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

    <!-- About Section -->
    <section class="bg-gray-100 relative mx-auto py-20 px-6 md:px-20">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- About Us -->
            <div>
                <h3 class="text-sm font-semibold tracking-widest text-gray-500 mb-2 uppercase">
                    About Us
                </h3>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 leading-tight">
                    We are a community of content writers who share their learnings
                </h2>
                <p class="text-gray-600 text-sm md:text-base mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>
                <a href="#" class="text-purple-600 font-semibold hover:underline">
                    Read More >
                </a>
            </div>
            <!-- Our Mission -->
            <div>
                <h3 class="text-sm font-semibold tracking-widest text-gray-500 mb-2 uppercase">
                    Our Mission
                </h3>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4 leading-tight">
                    Creating valuable content for creatives all around the world
                </h2>
                <p class="text-gray-600 text-sm md:text-base">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </section>

    <!-- Section author -->
    <section class="relative mx-auto py-20 px-6 md:px-20">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Title -->
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">
                List of Authors
            </h2>

            <!-- Author Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Author Card 1 -->
                <div class="bg-blue-50 rounded-lg shadow-md text-center p-6">
                    <img src="https://img.freepik.com/free-photo/portrait-interesting-young-man-winter-clothes_158595-914.jpg?t=st=1734489974~exp=1734493574~hmac=a9b397b352012aecd3034502676194fa8c7b72800fbcccdf0e2064087e6b8e0c&w=740"
                        alt="Author" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-lg font-semibold text-gray-700">Floyd Miles</h3>
                    <p class="text-sm text-gray-500 mb-4">Content Writer @Company</p>
                    <!-- Social Icons -->
                    <div class="flex justify-center space-x-4 text-gray-500">
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Author Card 2 -->
                <div class="bg-yellow-50 rounded-lg shadow-md text-center p-6">
                    <img src="https://img.freepik.com/free-photo/portrait-attractive-young-asian-businesswoman_1262-1554.jpg?t=st=1734490023~exp=1734493623~hmac=3415d1c858d016b666e690f36fd22f9cbc3076ec196289c6608bc047322ce3f6&w=1060"
                        alt="Author" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-lg font-semibold text-gray-700">Dianne Russell</h3>
                    <p class="text-sm text-gray-500 mb-4">Content Writer @Company</p>
                    <!-- Social Icons -->
                    <div class="flex justify-center space-x-4 text-gray-500">
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Author Card 3 -->
                <div class="bg-slate-50 rounded-lg shadow-md text-center p-6">
                    <img src="https://img.freepik.com/free-photo/young-beautiful-girl-black-turtleneck-smiling-broadly_141793-55335.jpg?t=st=1734490185~exp=1734493785~hmac=934a1ce02b1bb88f455d1e1cfd930dbf1fa5240bff6cd9410304e3275cd0e81e&w=1060"
                        alt="Author" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-lg font-semibold text-gray-700">Jenny Wilson</h3>
                    <p class="text-sm text-gray-500 mb-4">Content Writer @Company</p>
                    <!-- Social Icons -->
                    <div class="flex justify-center space-x-4 text-gray-500">
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Author Card 4 -->
                <div class="bg-red-50 rounded-lg shadow-md text-center p-6">
                    <img src="https://img.freepik.com/free-photo/calm-handsome-curly-haired-boy-posing-isolated-light-grey-standing-still-looks-peaceful-wearing-casual-manner-youth-style-concept_176532-8831.jpg?t=st=1734490291~exp=1734493891~hmac=79d6002eadb969cd60eb1e25b9358ad606652150b2658466ebbdd792e90cc562&w=1060"
                        alt="Author" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                    <h3 class="text-lg font-semibold text-gray-700">Leslie Alexander</h3>
                    <p class="text-sm text-gray-500 mb-4">Content Writer @Company</p>
                    <!-- Social Icons -->
                    <div class="flex justify-center space-x-4 text-gray-500">
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-gray-700">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Logo Section -->
            <div class="mt-12 text-center">
                <p class="text-gray-500 text-sm mb-4">We are Featured in</p>
                <div class="flex flex-wrap justify-center items-center gap-8">
                    <img src="https://img.freepik.com/free-vector/indonesian-halal-logo-new-branding-2022_17005-1495.jpg?t=st=1734490138~exp=1734493738~hmac=a52d017542bf342fc1a5ee59d8416f60f802b74fe7a98c03b803beef6d8db3f3&w=740"
                        alt="Logo 1" class="h-8">
                    <img src="https://img.freepik.com/free-vector/pink-blue-abstract-logo_1222-54.jpg?t=st=1734490651~exp=1734494251~hmac=12b155504fa1620a03f3490d27acd458b59bfd715a67cb80f53781f1c6b87d14&w=740"
                        alt="Logo 2" class="h-8">
                    <img src="https://img.freepik.com/free-vector/abstract-logo-flame-shape_1043-44.jpg?t=st=1734490677~exp=1734494277~hmac=5ece2827e13127cb288bbdc6056cf2cf5347daad510a4ed51837ba646a5adc7b&w=740"
                        alt="Logo 3" class="h-8">
                    <img src="https://img.freepik.com/free-vector/colorful-letter-o-gradient-logo-design_474888-2306.jpg?t=st=1734490497~exp=1734494097~hmac=c3f7ea0d0acf44d126459fa7e8753a305130ecec5b9b2b90bbbf85b13a725c35&w=740"
                        alt="Logo 4" class="h-8">
                    <img src="https://img.freepik.com/free-vector/flat-design-ac-logo-design_23-2149482027.jpg?t=st=1734490528~exp=1734494128~hmac=68ef2b6e6a74189130ec2ab260bcbeed4f052bbc0fb61de9545c2c6318a0ed78&w=740"
                        alt="Logo 5" class="h-8">
                </div>
            </div>
        </div>
    </section>


</x-layout>
