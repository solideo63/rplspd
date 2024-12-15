<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4">
    <h2 class="text-3xl font-bold tracking-tight text-red-800 mb-4">Laporan Pelanggaran</h2>
    <div>
        <p font-medium text-gray-900>Anda Tidak Mempunyai Riwayat Pelanggaran Hari Ini</p>
    </div>

    <h2 class="text-3xl font-bold tracking-tight text-red-800 mb-4">Riwayat Pelanggaran</h2>


    <div class="w-3/4 relative overflow-x-auto shadow-md sm:rounded-lg mx-auto">
        <table class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Hari/Tanggal Pelanggaran
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Pelanggaran
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Senin/ 9 Desember 2024
                    </th>
                    <td class="px-6 py-4">
                        Jambang
                    </td>
                </tr>
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Senin/ 16 Desember 2024
                    </th>
                    <td class="px-6 py-4">
                        Make Up
                    </td>

                </tr>

            </tbody>
        </table>
    </div>


</div>

<x-footer></x-footer>
