<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4 ">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6  bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Pencatatan Pelanggaran Operasi Umum</h3>
            <p class="text-gray-800 dark:text-gray-400 italic opacity-50">(Mohon isi data pelanggaran di bawah ini)
            </p>
            <form class="max-w-sm mx-auto pt-6">
                <div class="mb-5">
                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                    <input type="text" id="base-input"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="base-input"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tingkat</label>
                    <input type="text" id="base-input"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Pelanggaran</label>
                    <input type="text" id="base-input"
                        class="shadow bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </form>
            <div class="flex justify-end">
                <button type="button"
                    class=" text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
