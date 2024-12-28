<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4 ">
    <a href="{{  route('admin.tambah.peraturan') }}"><button type="button" style="background-color: #FCBE11;" class="text-white hover:opacity-90 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Tambah Peraturan</button></a>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="export-table" class="datatable-table">
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
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">{{ $row->nama }}</td>
                <td class="px-6 py-4">{{ $row->deskripsi }}</td>
                <td class="px-6 py-4">{{ $row->link }}</td>
                <td class="px-6 py-4 flex-row">
                    <a href="{{ route('admin.edit.peraturan', $row->id) }}">
                        <button type="submit" class="px-4 py-2 text-white bg-yellow-300 rounded-lg hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-300 transition duration-300 ease-in-out">
                            Edit
                        </button>
                    </a>
                    <form action="{{ route('admin.delete.peraturan', $row->id) }}" method="post">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300 transition duration-300 ease-in-out">
                            Hapus
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
