<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-9">
    <a href="{{ route('admin.tambah.faq') }}"><button type="button" style="background-color: #FCBE11;"
            class="text-white hover:opacity-90 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Tambah
            FaQ</button></a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="export-table"
        class="datatable-table">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Tanya</th>
                <th scope="col" class="px-6 py-3">Jawab</th>
                <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $row)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $row->tanya }}</td>
                    <td class="px-6 py-4">{{ $row->jawab }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('admin.edit.faq', $row->id) }}"
                            class="flex items-center justify-center text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95 mb-2">
                            <i class="fas fa-edit"></i> <!-- Ikon edit -->
                        </a>
                        <form action="{{ route('admin.delete.faq', $row->id) }}" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Ini?')"
                                class="flex items-center justify-center text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm p-2 transition-all ease-in-out duration-200 transform hover:scale-105 active:scale-95">
                                <i class="fas fa-trash-alt"></i> <!-- Ikon trash (hapus) -->
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<x-footer></x-footer>
