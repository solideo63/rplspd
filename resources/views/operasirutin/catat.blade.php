<x-layout>
</x-layout>
//
<div class="p-4 sm:ml-64 mt-16">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6 bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl text-center font-bold dark:text-white">Pencatatan Pelanggaran Operasi Rutin Tingkat
                @if (session('tingkat'))
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

            {{-- Notifikasi Error --}}
            @if ($errors->any())
                <div id="error-message"
                    class="flex items-center p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg dark:bg-red-800 dark:text-red-200 border border-red-300 shadow">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
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
                    // Menghilangkan notifikasi error setelah 5 detik
                    setTimeout(() => {
                        document.getElementById('error-message').classList.add('opacity-0', 'transition-opacity',
                            'duration-500');
                        setTimeout(() => document.getElementById('error-message').remove(), 500);
                    }, 5000);
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
                <div class="mb-5">
                    <label for="kelas"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                    <select id="kelas" name="kelas" required
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" disabled selected>Pilih Kelas...</option>
                        <option value="1D31">1D31</option>
                        <option value="1D32">1D32</option>
                        <option value="1KS1">1KS1</option>
                        <option value="1KS2">1KS2</option>
                        <option value="1KS3">1KS3</option>
                        <option value="1KS4">1KS4</option>
                        <option value="1ST1">1ST1</option>
                        <option value="1ST2">1ST2</option>
                        <option value="1ST3">1ST3</option>
                        <option value="1ST4">1ST4</option>
                        <option value="2D31">2D31</option>
                        <option value="2D32">2D32</option>
                        <option value="2D33">2D33</option>
                        <option value="2KS1">2KS1</option>
                        <option value="2KS2">2KS2</option>
                        <option value="2KS3">2KS3</option>
                        <option value="2KS4">2KS4</option>
                        <option value="2ST1">2ST1</option>
                        <option value="2ST2">2ST2</option>
                        <option value="2ST3">2ST3</option>
                        <option value="2ST4">2ST4</option>
                        <option value="2ST5">2ST5</option>
                        <option value="2ST6">2ST6</option>
                        <option value="2ST7">2ST7</option>
                        <option value="3D31">3D31</option>
                        <option value="3D32">3D32</option>
                        <option value="3D33">3D33</option>
                        <option value="3SD1">3SD1</option>
                        <option value="3SD2">3SD2</option>
                        <option value="3SE1">3SE1</option>
                        <option value="3SE2">3SE2</option>
                        <option value="3SE3">3SE3</option>
                        <option value="3SE4">3SE4</option>
                        <option value="3SK1">3SK1</option>
                        <option value="3SK2">3SK2</option>
                        <option value="3SK3">3SK3</option>
                        <option value="3SK4">3SK4</option>
                        <option value="3SI1">3SI1</option>
                        <option value="3SI2">3SI2</option>
                        <option value="4SD1">4SD1</option>
                        <option value="4SD2">4SD2</option>
                        <option value="4SD3">4SD3</option>
                        <option value="4SE1">4SE1</option>
                        <option value="4SE2">4SE2</option>
                        <option value="4SE3">4SE3</option>
                        <option value="4SI1">4SI1</option>
                        <option value="4SI2">4SI2</option>
                        <option value="4SI3">4SI3</option>

                    </select>
                </div>
                <input type="hidden" name="tingkat" value="{{ $tingkat }}">
                <div class="mb-5">
                    <label for="pelanggaran"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelanggaran</label>
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
        $('#nim').on('input', function() {
            const nim = $(this).val();

            if (nim.length === 9) { // Validasi NIM hanya jika panjangnya 9 karakter
                $.ajax({
                    url: '{{ route('get.mahasiswa') }}',
                    type: 'GET',
                    data: {
                        nim: nim
                    },
                    success: function(response) {
                        if (response) {
                            $('#nama_mahasiswa').val(response.nama);
                            $('#kelas').val(response.kelas);
                            $('#tingkat').val(response.tingkat);
                        } else {
                            $('#nama_mahasiswa').val('');
                            $('#kelas').val('');
                            $('#tingkat').val('');
                        }
                    },
                    error: function() {
                        $('#nama_mahasiswa').val('');
                        $('#kelas').val('');
                        $('#tingkat').val('');
                    }
                });
            } else {
                $('#nama_mahasiswa').val('');
                $('#kelas').val('');
                $('#tingkat').val('');
            }
        });
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
