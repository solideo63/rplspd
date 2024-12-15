<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4">
    <h2 class="text-3xl font-bold tracking-tight text-red-800 mb-4">Kritik Saran</h2>
    <div class="bg-yellow-400 rounded-lg shadow-lg p-5 w-full">

        <!-- Form Body -->
        <form class="mx-auto">
            <textarea id="message" rows="8"
                class="flex p-4 w-full text-lg text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Kritik dan Saran"></textarea>
            <br>
            <div class="flex justify-end mt-4">
                <button type="submit"
                    class="flex justify-center items-center rounded-xl bg-blue-900 px-8 py-3 text-sm font-semibold text-white shadow hover:bg-indigo-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Kirim
                </button>
            </div>
        </form>

    </div>
</div>




<x-footer></x-footer>
