<a {{ $attributes }}
    class="{{ $active ? 'font-bold' : '' }} flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-yellow-300 dark:text-white dark:hover:bg-gray-700"
    aria-curent="{{ $active ? 'page' : false }}">
    <span class="ms-3">{{ $slot }}</span>
</a>
