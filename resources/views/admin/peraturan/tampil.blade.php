<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-9">
    <a href="{{ route('admin.tambah.peraturan') }}"><button type="button"
            class="text-white bg-yellow-300 hover:bg-yellow-500 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Tambah
            Peraturan</button></a>
    {{-- <div class="overflow-x-auto"> --}}
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="export-table"
        class="datatable-table">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nama Peraturan</th>
                <th scope="col" class="px-6 py-3">Deskripsi Peraturan</th>
                <th scope="col" class="px-6 py-3">Link</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $row)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $row->nama }}</td>
                    <td class="px-6 py-4">{{ $row->deskripsi }}</td>
                    <td class="px-6 py-4 max-w-[150px] break-words">
                        <a href="{{ $row->link }}" target="_blank" class="text-blue-500 underline">
                            {{ $row->link }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{-- <div
                            class="flex flex-col sm:flex-row items-center sm:space-x-2 space-y-2 sm:space-y-0 justify-center">
                            <!-- Tombol Edit --> --}}
                        <a href="{{ route('admin.edit.peraturan', $row->id) }}"
                            class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95 mb-2">
                            <i class="fas fa-edit"></i> <!-- Ikon edit -->
                        </a>

                        <!-- Tombol Hapus -->
                        <form action="{{ route('admin.delete.peraturan', $row->id) }}" method="POST" class="inline"
                            id="deleteForm-{{ $row->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="confirmDelete('{{ $row->id }}')"
                                class="flex items-center justify-center text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                        {{-- </div> --}}
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
                                    }
                                }
                            });
                        }
                    </script>

                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{-- </div> --}}
</div>

<x-footer></x-footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
