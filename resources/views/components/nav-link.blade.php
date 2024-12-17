<a {{ $attributes }}
    class="{{ $active ? 'text-black md:text-white font-semibold pb-1 border-b-2 border-yellow-500' : 'text-gray-800 md:text-white text-md hover:text-gray-400 duration-300' }}"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
