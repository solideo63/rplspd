<x-layout>{{ $title }}</x-layout>

<div class="p-4 sm:ml-64 mt-4">
    <div class="flex justify-center">
        <!-- Kontainer utama -->
        <div class="w-full max-w-4xl p-6 bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-2xl font-bold dark:text-white mb-5">Klaim Pelanggaran</h3>
            <!-- Tabel atau konten lainnya -->
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <div id="exampleWrapper" class="dark:bg-gray-900">
                    <!-- Konten tabel -->
                    <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                        <div class="datatable-top flex justify-between flex-wrap items-center gap-4">

                            <div class="flex flex-col sm:flex-row flex-wrap space-y-2 sm:space-y-0 items-start justify-start pb-4 gap-4"
                                style="width: 100%;">

                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative w-full sm:w-auto" style="width: 100%;">
                                    <div
                                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search"
                                        class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Cari Nama" style="width: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabel isi -->
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <!-- Tabel header -->
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">Nama</th>
                                <th scope="col" class="px-6 py-3">NIM</th>
                                <th scope="col" class="px-6 py-3">Jenis Pelanggaran</th>
                                <th scope="col" class="px-6 py-3">Aksi</th>
                            </tr>
                        </thead>
                        <!-- Tabel isi -->
                        <tbody>

                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">Lorem Ipsum</td>
                                <td class="px-6 py-4">222212345</td>
                                <td class="px-6 py-4">Rambut</td>
                                <td class="px-6 py-4">
                                    <form class="max-w-sm mx-auto">
                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Badge sudah di BAAK</option>
                                            <option value="BK">Badge belum kembali</option>
                                            <option value="SK">Badge sudah kembali</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">Lorem Ipsum</td>
                                <td class="px-6 py-4">222212345</td>
                                <td class="px-6 py-4">Rambut</td>
                                <td class="px-6 py-4">
                                    <form class="max-w-sm mx-auto">
                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Badge sudah di BAAK</option>
                                            <option value="BK">Badge belum kembali</option>
                                            <option value="SK">Badge sudah kembali</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">Lorem Ipsum</td>
                                <td class="px-6 py-4">222212345</td>
                                <td class="px-6 py-4">Rambut</td>
                                <td class="px-6 py-4">
                                    <form class="max-w-sm mx-auto">
                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Badge sudah di BAAK</option>
                                            <option value="BK">Badge belum kembali</option>
                                            <option value="SK">Badge sudah kembali</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">Lorem Ipsum</td>
                                <td class="px-6 py-4">222212345</td>
                                <td class="px-6 py-4">Rambut</td>
                                <td class="px-6 py-4">
                                    <form class="max-w-sm mx-auto">
                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Badge sudah di BAAK</option>
                                            <option value="BK">Badge belum kembali</option>
                                            <option value="SK">Badge sudah kembali</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4">Lorem Ipsum</td>
                                <td class="px-6 py-4">222212345</td>
                                <td class="px-6 py-4">Rambut</td>
                                <td class="px-6 py-4">
                                    <form class="max-w-sm mx-auto">
                                        <select id="countries"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Badge sudah di BAAK</option>
                                            <option value="BK">Badge belum kembali</option>
                                            <option value="SK">Badge sudah kembali</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


<x-footer></x-footer>
