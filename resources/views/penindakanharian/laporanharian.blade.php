<x-layout> </x-layout>

<script>
    function handleSearch(penindakan_harian) {
        const query = penindakan_harian.target.value.trim().toLowerCase(); // Input pencarian
        const rows = document.querySelectorAll('#export-table tbody tr'); // Ambil semua baris tabel di <tbody>

        rows.forEach((row) => {
            const nim = row.querySelector('td:nth-child(2)')?.textContent.toLowerCase() || '';
            const name = row.querySelector('td:nth-child(3)')?.textContent.toLowerCase() || '';

            // Jika input cocok dengan NIM atau NAMA
            if (nim.includes(query) || name.includes(query)) {
                row.style.display = ''; // Tampilkan baris
            } else {
                row.style.display = 'none'; // Sembunyikan baris
            }
        });

        applyFilters();
    }

    function applyFilters() {
        const rows = document.querySelectorAll('#data-table tbody tr');

        rows.forEach((row) => {
            const matchesSearch = row.dataset.matchesSearch === 'true';
            const matchesDate = row.dataset.matchesDate === 'true';

            if (matchesSearch && matchesDate) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    document.getElementById('search-input').addEventListener('input', handleSearch);
    document.getElementById('datepicker-actions').addEventListener('change', handleDateFilter);

    function downloadFile(format) {
        const baseUrl = "{{ route('penindakan-harian.download', ['format' => ':format']) }}";
        const tanggal = document.getElementById('datepicker-actions').value; // Ambil tanggal dari input datepicker
        if (!tanggal) {
            alert('Silakan pilih tanggal terlebih dahulu!');
            return;
        }
        const url = baseUrl.replace(':format', format) + `?tanggal=${tanggal}`;
        window.location.href = url;
    }
</script>

<style>
    .hover-effect {
        color: gray;
        /* Efek transisi warna */
    }

    .hover-effect:hover {
        color: black;
    }
</style>

<div class="p-4 sm:ml-64 mt-8">
    <h3 class="text-2xl font-bold dark:text-white">Daftar Pelanggaran Penindakan Harian</h3>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <div id="exampleWrapper" class="dark:bg-gray-900">
            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top justify-between">
                    <div
                        class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-3 rtl:space-x-reverse w-full sm:w-auto">
                        <button id="exportDropdownButton" data-dropdown-toggle="exportDropdown" type="button"
                            class="flex w-full md:w-auto items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">Export
                            as<svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 9-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="exportDropdown"
                            class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(494.667px, 69.3333px, 0px);"
                            data-popper-placement="bottom">
                            <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400"
                                aria-labelledby="exportDropdownButton">
                                <li><button id="export-csv" onclick="downloadFile('csv')"
                                        class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                            class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1.018 8.828a2.34 2.34 0 0 0-2.373 2.13v.008a2.32 2.32 0 0 0 2.06 2.497l.535.059a.993.993 0 0 0 .136.006.272.272 0 0 1 .263.367l-.008.02a.377.377 0 0 1-.018.044.49.49 0 0 1-.078.02 1.689 1.689 0 0 1-.297.021h-1.13a1 1 0 1 0 0 2h1.13c.417 0 .892-.05 1.324-.279.47-.248.78-.648.953-1.134a2.272 2.272 0 0 0-2.115-3.06l-.478-.052a.32.32 0 0 1-.285-.341.34.34 0 0 1 .344-.306l.94.02a1 1 0 1 0 .043-2l-.943-.02h-.003Zm7.933 1.482a1 1 0 1 0-1.902-.62l-.57 1.747-.522-1.726a1 1 0 0 0-1.914.578l1.443 4.773a1 1 0 0 0 1.908.021l1.557-4.773Zm-13.762.88a.647.647 0 0 1 .458-.19h1.018a1 1 0 1 0 0-2H6.647A2.647 2.647 0 0 0 4 13.647v1.706A2.647 2.647 0 0 0 6.647 18h1.018a1 1 0 1 0 0-2H6.647A.647.647 0 0 1 6 15.353v-1.706c0-.172.068-.336.19-.457Z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="hover-effect">Export CSV</span></button></li>
                                <li><button id="export-excel" onclick="downloadFile('excel')"
                                        class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"><svg
                                            class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Zm-.293 9.293a1 1 0 0 1 0 1.414L9.414 14l1.293 1.293a1 1 0 0 1-1.414 1.414l-2-2a1 1 0 0 1 0-1.414l2-2a1 1 0 0 1 1.414 0Zm2.586 1.414a1 1 0 0 1 1.414-1.414l2 2a1 1 0 0 1 0 1.414l-2 2a1 1 0 0 1-1.414-1.414L14.586 14l-1.293-1.293Z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="hover-effect">Export EXCEL</span></button></li>
                                <li>
                                    <button id="export-pdf" onclick="downloadFile('pdf')"
                                        style="color: gray; transition: color 0.3s;"
                                        onmouseover="this.style.color='black'; this.querySelector('svg').style.color='black';"
                                        onmouseout="this.style.color='gray'; this.querySelector('svg').style.color='gray';"
                                        class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600">
                                        <svg style="color: gray; transition: color 0.3s;"
                                            class="me-1.5 h-4 w-4 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="hover-effect">Export PDF</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="flex flex-col sm:flex-row flex-wrap space-y-2 sm:space-y-0 items-start justify-start pb-4 gap-4">
                        <div class="w-full sm:w-auto">
                            <form method="GET" action="{{ route('penindakan-harian.filter') }}" id="filterForm">
                                <!-- Dropdown untuk memilih tingkat -->
                                <div class="w-full sm:w-auto">
                                    <select id="tingkat" name="tingkat"
                                        class="inline-flex items-center w-auto text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm p-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        onchange="this.form.submit()">
                                        <option value="" disabled selected>Pilih Tingkat</option>
                                        <option value="1" {{ request('tingkat') == '1' ? 'selected' : '' }}>Tingkat
                                            1</option>
                                        <option value="2" {{ request('tingkat') == '2' ? 'selected' : '' }}>Tingkat
                                            2</option>
                                        <option value="3" {{ request('tingkat') == '3' ? 'selected' : '' }}>Tingkat
                                            3</option>
                                        <option value="4" {{ request('tingkat') == '4' ? 'selected' : '' }}>Tingkat
                                            4</option>
                                    </select>
                                </div>
                        </div>
                        <div>
                            <div class="relative w-full sm:w-auto">
                                <input id="datepicker-actions" name="tanggal" type="date"
                                    value="{{ request('tanggal') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Pilih Tanggal" max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}"
                                    onchange="document.getElementById('filterForm').submit();">
                            </div>
                        </div>
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative w-full sm:w-auto">
                            <div
                                class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search" name="nama"
                                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-50 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ request('nama') }}" placeholder="Cari Nama" oninput="handleSearch(event)">
                            </form>
                        </div>
                        <div class="relative w-full sm:w-auto">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-3.5 h-3.5 text-white dark:text-gray-800 aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                </svg>
                            </div>
                            <button type="button" style="background-color: #9F2A32;"
                                onclick="window.location.href='{{ route('laporanharian') }}'"
                                class="block p-2
                                ps-10 text-sm w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4
                                focus:outline-none focus:ring-blue-300 font-medium rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"">Hapus
                                Filter </button>
                        </div>
                    </div>
                </div>

                {{-- Notifikasi Sukses --}}
                @if (session('success'))
                    <div id="success-message"
                        class="flex items-center p-4 mb-4 text-sm text-green-800 bg-green-50 rounded-lg dark:bg-green-800 dark:text-green-200 border border-green-300 shadow">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
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

                {{-- Notifikasi Gagal --}}
                @if (session('error'))
                    <div id="error-message"
                        class="flex items-center p-4 mb-4 text-sm text-red-800 bg-red-50 rounded-lg dark:bg-red-800 dark:text-red-200 border border-red-300 shadow">
                        <svg class="w-5 h-5 mr-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707a1 1 0 00-1.414-1.414L9 11.586 7.707 10.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>{{ session('error') }}</span>
                    </div>
                    <script>
                        // Menghilangkan notifikasi setelah 3 detik
                        setTimeout(() => {
                            document.getElementById('error-message').classList.add('opacity-0', 'transition-opacity',
                                'duration-500');
                            setTimeout(() => document.getElementById('error-message').remove(), 500);
                        }, 3000);
                    </script>
                @endif

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    id="export-table" class="datatable-table">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Hari/Tanggal</th>
                            <th scope="col" class="px-6 py-3">NIM</th>
                            <th scope="col" class="px-6 py-3">Nama Mahasiswa</th>
                            <th scope="col" class="px-6 py-3">Tingkat</th>
                            <th scope="col" class="px-6 py-3">Pelanggaran</th>
                            <th scope="col" class="px-6 py-3">Nama Pencatat</th>
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $row)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <!-- Menampilkan hari beserta tanggal untuk created_at -->
                                    {{ $row->created_at ? $row->created_at->translatedFormat('l, d-m-Y') : 'N/A' }}
                                    <!-- Format: Hari, dd-mm-yyyy (contoh: Monday, 27-12-2024) -->

                                    @if ($row->updated_at && $row->updated_at != $row->created_at)
                                        <!-- Jika sudah diupdate, tampilkan informasi terakhir update dengan menyesuaikan zona waktu -->
                                        <div class="text-xs text-gray-500 mt-1">
                                            <small>Terakhir diupdate:
                                                {{ $row->updated_at->timezone('Asia/Jakarta')->format('d-m-Y H:i') }}</small>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-6 py-4">{{ $row->nim }}</td>
                                <td class="px-6 py-4">{{ $row->nama_mahasiswa }}</td>
                                <td class="px-6 py-4 text-center">{{ $row->tingkat }}</td>
                                <td class="px-6 py-4">{{ $row->pelanggaran }}</td>
                                <td class="px-6 py-4">{{ $row->nama_pencatat }}</td>
                                <td class="px-6 py-4 flex">
                                    <!-- Edit Button with only icon -->
                                    <a href="{{ route('enter-token', $row->id) }}"
                                        class="flex items-center justify-center text-white bg-yellow-300 hover:bg-yellow-400 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95 mr-2">
                                        <i class="fas fa-file-invoice"></i><!-- Ikon edit -->
                                    </a>
                                    {{-- <a href="{{ route('catatedit.harian', $row->id) }}"
                                            class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95 mr-2">
                                            <i class="fas fa-edit"></i> <!-- Ikon edit -->
                                        </a>

                                        <!-- Hapus Button with only icon -->
                                        <form action="{{ route('delete.harian', $row->id) }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Ini?')"
                                                class="flex items-center justify-center text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95">
                                                <i class="fas fa-trash-alt"></i> <!-- Ikon trash (hapus) -->
                                            </button>
                                        </form> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-6 py-4 text-center">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<x-footer></x-footer>
<script src="{{ asset('js/export.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
