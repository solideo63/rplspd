<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4 ">
    <div class="flex justify-center items-center h-screen">
        <div
            class="block max-w-sm p-6  bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Edit Peraturan</h3>
            <form action="{{ route('admin.update.peraturan', $data->id) }}" method="post" class="max-w-sm mx-auto pt-6">
                @csrf
                <div class="mb-5">
                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="base-input" name="nama" value="{{ $data->nama }}"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        style="overflow: visible; word-wrap: break-word;">
                </div>
                <div class="mb-5">
                    <label for="deskripsi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        style="overflow: visible; word-wrap: break-word; resize: vertical;">{{ $data->deskripsi }}</textarea>
                </div>

                <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                        Peraturan</label>
                    <input type="text" id="base-input" name="link" value="{{ $data->link }}"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class=" text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Edit
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>

<x-footer></x-footer>
