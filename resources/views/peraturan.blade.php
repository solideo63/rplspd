<x-layout></x-layout>
<div class="p-4 sm:ml-64 mt-4">
        <h2 class="text-3xl font-bold tracking-tight text-red-800 mb-4">Peraturan Terkait</h2>
        @forelse($data as $row)
    <div class="flex justify-center items-center w-full p-4">
        <div
            class="max-w-sm w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 p-4 md:p-6">
            
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ $row->nama }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{ $row->deskripsi }}</p>
                <a href="{{ $row->link }}"
                    target="_blank"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Baca Lebih Lanjut
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
@empty
    <div class="flex justify-center items-center w-full p-4">
        <p class="text-gray-700 dark:text-gray-400">Tidak ada data yang tersedia.</p>
    </div>
@endforelse

        
</div>
<x-footer></x-footer>