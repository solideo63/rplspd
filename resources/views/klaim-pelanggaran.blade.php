<x-layout> </x-layout>

<style>
    /* Garis pembatas untuk tabel */
    table {
        border-collapse: collapse;
        /* Hilangkan jarak antar border */
        width: 100%;
        /* Pastikan tabel memenuhi lebar */
    }

    table thead th,
    table tbody td {
        border: 1px solid #d1d5db;
        /* Warna garis pembatas abu-abu */
        padding: 12px;
        /* Beri jarak antar isi */
        text-align: center;
        /* Isi rata kiri */
    }

    /* Sticky positioning untuk kolom tertentu */
    table thead th.sticky,
    table tbody td.sticky {
        position: sticky;
        z-index: 10;
    }

    table thead th.sticky.left-0,
    table tbody td.sticky.left-0 {
        left: 0;
        background-color: #f9fafb;
        /* Warna latar belakang header */
        border-right: 1px solid #d1d5db;
        /* Tambahkan border kanan */
    }

    table thead th.sticky.right-0,
    table tbody td.sticky.right-0 {
        right: 0;
        background-color: #f9fafb;
        /* Warna latar belakang header */
        border-left: 1px solid #d1d5db;
        /* Tambahkan border kiri */
    }

    /* Background untuk sticky kolom pada isi tabel */
    table tbody td.sticky.left-0 {
        background-color: #ffffff;
        /* Warna latar belakang isi */
        border-right: 1px solid #d1d5db;
        /* Tambahkan border kanan */
    }

    table tbody td.sticky.right-0 {
        background-color: #ffffff;
        /* Warna latar belakang isi */
        border-left: 1px solid #d1d5db;
        /* Tambahkan border kiri */
    }

    /* Responsif untuk layar kecil */
    @media screen and (max-width: 768px) {

        table tbody td,
        table thead th {
            white-space: nowrap;
            /* Isi tetap dalam satu baris */
        }
    }
</style>

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
    <h3 class="text-2xl font-bold dark:text-white">Klaim Pelanggaran Penindakan Harian</h3>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
        <div id="exampleWrapper" class="dark:bg-gray-900">
            <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                <div class="datatable-top justify-between">
                    <div
                        class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-3 rtl:space-x-reverse w-full sm:w-auto">
                    </div>
                    <div
                        class="flex flex-col sm:flex-row flex-wrap space-y-2 sm:space-y-0 items-start justify-start pb-4 gap-4">
                        <div class="w-full sm:w-auto">
                            <form method="GET" action="{{ route('klaim-pelanggaran.filter') }}" id="filterForm">
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
                                onclick="window.location.href='{{ route('klaim-pelanggaran') }}'"
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

                <div class="overflow-x-auto relative">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                        id="export-table" class="datatable-table">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3 text-center">Hari/Tanggal</th>
                                <th scope="col" class="px-4 py-3 text-center">NIM</th>
                                <th scope="col"
                                    class="py-3 text-center sticky left-0 bg-gray-50 dark:bg-gray-700 z-10">Nama
                                    Mahasiswa</th>
                                <th scope="col" class="px-4 py-3 text-center">Kelas</th>
                                {{-- <th scope="col" class="px-4 py-3 text-center">Tingkat</th> --}}
                                <th scope="col" class="px-4 py-3 text-center">Pelanggaran</th>
                                <th scope="col" class="px-4 py-3 text-center">Nama Pencatat</th>
                                <th scope="col" class="px-4 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $row)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $row->tanggal ? \Carbon\Carbon::parse($row->tanggal)->translatedFormat('l, d-m-Y') : 'N/A' }}

                                        @if ($row->updated_at && $row->updated_at != $row->created_at)
                                            <span
                                                class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-gray-700 dark:text-yellow-300 border border-yellow-300">UPDATED</span>
                                            <div class="text-xs text-gray-500 mt-1">
                                                <small>Terakhir diupdate:
                                                    {{ \Carbon\Carbon::parse($row->updated_at)->format('d-m-Y H:i') }}</small>
                                            </div>
                                        @elseif (!$row->updated_at || $row->updated_at == $row->created_at)
                                            @if (\Carbon\Carbon::parse($row->created_at)->diffInMinutes(now()) < 30)
                                                <span
                                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-1 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">NEW</span>
                                                <div class="text-xs text-gray-500 mt-1">
                                                    <small>Ditambahkan:
                                                        {{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y H:i') }}</small>
                                                </div>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="px-4 py-3">{{ $row->nim }}</td>
                                    <td class="px-4 py-3 sticky left-0 bg-white dark:bg-gray-800 z-10">
                                        {{ $row->nama }}</td>
                                    <td class="px-4 py-3">{{ $row->kelas }}</td>
                                    {{-- <td class="px-6 py-4 text-center">{{ $row->tingkat }}</td> --}}
                                    <td class="px-4 py-3">{{ $row->pelanggaran }}</td>
                                    <td class="px-4 py-3">{{ $row->nama_pencatat }}</td>
                                    @if (Auth::user()->role == 'spd' && Auth::user()->name == $row->nama_pencatat)
                                        <td class="px-4 py-5 flex">
                                            {{-- <!-- Edit Button with only icon -->
                                        <a href="{{ route('enter-token', $row->id) }}"
                                            class="flex items-center justify-center text-white bg-yellow-300 hover:bg-yellow-400 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95 mr-2">
                                            <i class="fas fa-file-invoice"></i><!-- Ikon edit -->
                                        </a>
                                        {{-- <a href="{{ route('catatedit.harian', $row->id) }}"
                                            class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95 mr-2">
                                            <i class="fas fa-edit"></i> <!-- Ikon edit -->
                                        </a> --}}

                                            <!-- Hapus Button with only icon -->
                                            <form action="{{ route('delete.harian', $row->id) }}" method="POST"
                                                class="inline" id="deleteForm-{{ $row->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" onclick="confirmDelete('{{ $row->id }}')"
                                                    class="flex items-center justify-center text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-semibold rounded-lg text-sm px-4 py-2 transition-transform duration-200 transform hover:scale-105 active:scale-95 mr-2">
                                                    Hapus Pelanggaran
                                                </button>
                                            </form>
                                        </td>

                                        <script>
                                            function confirmDelete(id) {
                                                Swal.fire({
                                                    title: 'Apakah Anda Yakin?',
                                                    text: 'Data yang dihapus tidak dapat dikembalikan!',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#d33',
                                                    cancelButtonColor: '#3085d6',
                                                    confirmButtonText: 'Ya, hapus!',
                                                    cancelButtonText: 'Batal'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // Submit form programmatically
                                                        const form = document.getElementById(`deleteForm-${id}`);
                                                        if (form) {
                                                            form.submit();

                                                            // Tampilkan notifikasi sukses setelah form disubmit
                                                            Swal.fire({
                                                                title: 'Berhasil!',
                                                                text: 'Data telah dihapus.',
                                                                icon: 'success',
                                                                timer: 2000, // Durasi popup
                                                                showConfirmButton: false
                                                            }).then(() => {
                                                                // Reload halaman untuk memperbarui tabel
                                                                window.location.reload();
                                                            });
                                                        }
                                                    }
                                                });
                                            }
                                        </script>
                                    @endif
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
    <br>
    <div class="mt-4">
        {{ $data->appends(request()->query())->links('pagination::tailwind') }}
    </div>
</div>
<x-footer></x-footer>
<script src="{{ asset('js/export.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
