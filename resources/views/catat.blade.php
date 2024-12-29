<x-layout>
</x-layout>
//
<div class="p-4 sm:ml-64 mt-16">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6 bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Pencatatan Pelanggaran Operasi Rutin Tingkat @if (session('tingkat'))
                    {{ session('tingkat') }}</p>
                @else
                    {{ $tingkat }}</p>
                @endif
            </h3>
            <p class="text-gray-800 dark:text-gray-400 italic opacity-50">(Mohon isi data pelanggaran di bawah ini)
            </p>

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
                    // Menghilangkan notifikasi setelah 3 detik
                    setTimeout(() => {
                        document.getElementById('success-message').classList.add('opacity-0', 'transition-opacity',
                            'duration-500');
                        setTimeout(() => document.getElementById('success-message').remove(), 500);
                    }, 3000);
                </script>
            @endif

            {{-- Form --}}
            <form class="max-w-sm mx-auto pt-6" action="{{ route('operasi-rutin.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="nim"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                    <input type="text" id="nim" name="nim" required
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="nama_mahasiswa"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" required
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <input type="hidden" name="tingkat" value="{{ $tingkat }}">
                <div class="mb-5">
                    <label for="pelanggaran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Pelanggaran</label>
                    <select
                        class="pelanggaran shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        name="pelanggaran[]" multiple="multiple" id="pelanggaran" required
                        style="background-color: white; color: black;">
                        @foreach ($pelanggarans as $pelanggaran)
                            <option value="{{ $pelanggaran->kodePelanggaran }}"
                                {{ in_array($pelanggaran->kodePelanggaran, old('violation', [])) ? 'selected' : '' }}>
                                {{ $pelanggaran->namaPelanggaran }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#pelanggaran').select2({
            theme: "classic",
            allowClear: true,
            minimumInputLength: 1,
            ajax: {
                url: "{{ route('pelanggaran.index') }}",
                processResults: function({
                    data
                }) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                id: item.kodePelanggaran,
                                text: item.namaPelanggaran
                            }
                        })
                    }
                }
            }
        });
    });
</script>

<x-footer></x-footer>
