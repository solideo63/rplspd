@props([
    'active' => false,
    'icon' => null, // Parameter untuk kode SVG
])

<a {{ $attributes }}
    class="{{ $active ? 'font-bold bg-yellow-300' : '' }} flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-yellow-300 dark:hover:bg-gray-700 group"
    aria-current="{{ $active ? 'page' : false }}">

    @if ($icon)
        <!-- Jika parameter ikon SVG diberikan -->
        {!! $icon !!}
    @else
        <!-- Ikon default jika tidak ada parameter -->
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z" />
        </svg>
    @endif

    <span class="ms-3">{{ $slot }}</span>
</a>
