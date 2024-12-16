<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Home</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-slate-200">
    <nav class="z-[1000] text-white p-5 bg-[#232536] shadow md:flex md:items-center md:justify-between">

        {{-- Logo --}}
        <div>
            <span class="text-3xl font-bold italic">
                <a href="" class="cursor-pointer">Blog</a>
            </span>

            <span class="text-3xl cursor-pointer mx-2 md:hidden block">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </span>
        </div>

        {{-- Menu --}}
        <ul
            class="md:flex md:items-center md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 md:pl-0 pl-7 md:opacity-0 top-[-400px] transition-all ease-in duration-300">
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Blogs</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>

            <!-- Signin dan Signup Button -->
            <button
                class="mx-4 my-2 border border-[#4baedf] text-sm md:text-base text-[#4baedf] px-5 py-2 rounded-md font-semibold hover:bg-[#4baedf] hover:text-white transition duration-300">
                Signin
            </button>
            <button
                class="mx-4 my-2 md:my-0 bg-[#4baedf] text-sm md:text-base text-white px-5 py-2 rounded-md font-semibold hover:bg-[#3a8bbd] transition duration-300">
                Signup
            </button>
        </ul>
    </nav>
    <h1 class="text-red-500">Hello Laravel</h1>


    {{-- Ionicons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- Script JS --}}
    <script src="{{ asset('asset/js/script.js') }}"></script>
</body>

</html>
