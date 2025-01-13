<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-7">
    <h2 class="text-3xl font-bold tracking-tight mb-6">Kirim Kritik dan Saran</h2>

    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div id="success-message"
            class="flex items-center p-4 mb-4 text-sm text-green-800 bg-green-50 rounded-lg dark:bg-green-800 dark:text-green-200 border border-green-300 shadow">
            <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707a1 1 0 00-1.414-1.414L9 11.586 7.707 10.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('success-message').classList.add('opacity-0', 'transition-opacity',
                    'duration-500');
                setTimeout(() => document.getElementById('success-message').remove(), 500);
            }, 3000);
        </script>
    @endif

    {{-- Notifikasi Error --}}
    @if ($errors->any())
        <div id="error-message"
            class="flex items-center p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg dark:bg-red-800 dark:text-red-200 border border-red-300 shadow">
            <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-3.707-5.707a1 1 0 011.414-1.414L9 10.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-2-2z"
                    clip-rule="evenodd"></path>
            </svg>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('error-message').classList.add('opacity-0', 'transition-opacity',
                    'duration-500');
                setTimeout(() => document.getElementById('error-message').remove(), 500);
            }, 5000);
        </script>
    @endif

    <div class="bg-yellow-300 rounded-xl shadow-xl p-6 w-full">
        <form action="/kirim-kritik-saran/submit" method="POST" class="space-y-6">
            @csrf

            <!-- Nama Field -->
            <div>
                <label for="nama" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                    Nama <span class="text-red-600">*</span>
                </label>
                <input type="text" name="nama" id="nama"
                    class="w-full p-4 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Masukkan nama Anda" required>
            </div>

            <!-- Kritik dan Saran Field -->
            <div>
                <label for="kritiksaran" class="block mb-2 text-sm font-semibold text-gray-900 dark:text-white">
                    Kritik dan Saran <span class="text-red-600">*</span>
                </label>
                <textarea rows="8" name="kritiksaran" id="kritiksaran"
                    class="w-full p-4 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Tuliskan kritik dan saran Anda di sini" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="rounded-lg bg-blue-600 px-6 py-3 text-sm font-medium text-white shadow-md hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Kirim
                </button>
            </div>
        </form>
    </div>
</div>

<x-footer></x-footer>
