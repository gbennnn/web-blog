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
            <a href="#" class="text-gray-800 md:text-white text-md hover:text-gray-400 duration-300">Blog's</a>
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
