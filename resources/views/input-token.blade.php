<x-layout></x-layout>

<div class="p-4 sm:ml-64 mt-4 ">
    <div class="flex justify-center">
        <div
            class="block max-w-sm p-6 bg-yellow-300 border rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full">
            <h3 class="text-2xl font-bold dark:text-white">Masukkan Token</h3>
            <br>
            @if(session('error'))
            <div class="p-4 mt-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                {{ session('error') }}
            </div>
            <br>
            @endif
            <form method="POST" action="/enter-token">
                @csrf
                <label for="token">Token:</label>
                <br>
                <input class="block w-full rounded-md mt-2" type="text" id="token" name="token" required>
                <br>
                <div class="flex justify-end mt-4">
                    <button type="submit" class="text-white bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<x-footer></x-footer>